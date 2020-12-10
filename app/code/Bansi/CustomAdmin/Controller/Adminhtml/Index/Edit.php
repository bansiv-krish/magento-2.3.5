<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Controller\Adminhtml\Index;
use Magento\Framework\App\ResponseInterface;
use Bansi\ApiModule\Model\GreetingMessage;
use Magento\Framework\Registry;
/**
 * Catalog index page controller.
 */
class Edit extends \Magento\Backend\App\Action 
{
	protected $resultPageFactory;
    protected $greetingmessage;
	protected $registry;
	    protected function _isAllowed()
	{
	 return $this->_authorization->isAllowed('Bansi_CustomAdmin::menu');
	}
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        GreetingMessage $greetingmessage,
        Registry $registry
    ) {
        parent::__construct($context);
        $this->greetingmessage=$greetingmessage;
        $this->resultPageFactory = $resultPageFactory;
         $this->registry = $registry;
    }

    public function execute()
    {
    $id=$this->getRequest()->getparam('id');
    $model=$this->greetingmessage;

    if($id){
        $model->load($id);
        if(!$model->getId()){
            $this->messageManager->addErrorMessage(__('This message does not exist'));
            $result=$this->resultRedirectFactory->create();
            return $result->setPath('customadmin/index/index/');
        }
    }
   
        $data=$this->_getSession()->getFormData(true);
        if(!empty($data)){
            $model->setData($data);
        }
       // var_dump($model);exit();
        $this->registry->register('message',$model);
        $resultpage=$this->resultPageFactory->create();
        
        if($id){
            $resultpage->getConfig()->getTitle()->prepend('Edit');
        }else{
            $resultpage->getConfig()->getTitle()->prepend('Add');
        }
        return $resultpage;
    }
}
