<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Controller\Adminhtml\Index;
use Magento\Framework\App\ResponseInterface;
use Magento\Backend\Model\View\Result\ForwardFactory;
use Magento\Backend\Model\View\Result\RedirectFactory;
use Bansi\ApiModule\Model\GreetingMessage;
/**
 * Catalog index page controller.
 */
class Delete extends \Magento\Backend\App\Action
{
    protected $forwardfactory;
    protected $model;
    protected $redirectFactory;
    
        protected function _isAllowed()
    {
     return $this->_authorization->isAllowed('Bansi_CustomAdmin::menu');
    }
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        ForwardFactory $forwardfactory,
        GreetingMessage $greetingmessage,
        RedirectFactory $redirectFactory
    ) {
        parent::__construct($context);
        $this->forwardfactory = $forwardfactory;
        $this->redirectFactory = $redirectFactory;
        $this->model=$greetingmessage;
    }

    public function execute()
    {
        $resultredirect = $this->redirectFactory->create();
        $id=$this->getRequest()->getparam('id');
        if($id){
            $model=$this->model;
            $model->load($id);
            try{
                $model->delete();
                  $this->messageManager->addSuccessMessage(__('Message Deleted Successfully'));
                  return $resultredirect->setPath('*/*/index');
            }
            catch(\Exception $e){
                 $this->messageManager->addErrorMessage($e->getMessage());
                   return $resultredirect->setPath('*/*/edit',['id'=>$model->getId(),'_current'=>true]);
            }
        }
     return $resultredirect->setPath('*/*/index');
}
}