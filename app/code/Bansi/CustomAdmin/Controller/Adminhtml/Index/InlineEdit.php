<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Controller\Adminhtml\Index;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Registry;
use Bansi\ApiModule\Model\GreetingMessage;
/**
 * Catalog index page controller.
 */
class InlineEdit extends \Magento\Backend\App\Action 
{
	protected $resultPageFactory;
    protected $greetingmessage;
	protected $JsonFactory;
	    protected function _isAllowed()
	{
	 return $this->_authorization->isAllowed('Bansi_CustomAdmin::menu');
	}
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        GreetingMessage $greetingmessage,
        JsonFactory $JsonFactory
    ) {
        parent::__construct($context);
        $this->greetingmessage=$greetingmessage;
        $this->resultPageFactory = $resultPageFactory;
         $this->JsonFactory = $JsonFactory;
    }

    public function execute()
    {
        $resultJson = $this->JsonFactory->create();

        $error=false;

        $message=[];
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/inline.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(print_r($this->getRequest()->getParams(), true));
        if($this->getRequest()->getParam('isAjax')){
            $postItems=$this->getRequest()->getParam('items',[]);
            if(!count($postItems)){
                $message[]=__('Please correct data');
                $error=true;
            }else{
                foreach (array_keys($postItems) as $modelId) {
                   $model=$this->greetingmessage->load($modelId);
                   try{
                    $model->setData(array_merge($model->getData(),$postItems[$modelId]));
                    $model->save();
                   }catch(\Exception $e){
                     $message[]=__($e->getMessage());
                     $error=true;
                   }
                }
            }
        }
        return $resultJson->setData([
        'messages'=>$message,
        'error'=>$error
        ]);
    }
}
