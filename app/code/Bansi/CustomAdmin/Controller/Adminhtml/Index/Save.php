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
class Save extends \Magento\Backend\App\Action
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
        $data=$id=$this->getRequest()->getPostValue();
     $resultforward = $this->forwardfactory->create();
     $resultredirect = $this->redirectFactory->create();
     
     if($data){
        $id=$this->getRequest()->getparam('greeting_id');
        if($id){
            $model=$this->model->load($id);
        }
        $model=$this->model->setData($data);
     }
     try{
        $model->save();
        $this->messageManager->addSuccessMessage(__('Message Saved Successfully'));
        $this->_getSession()->setFormData(false);
        if($this->getRequest()->getparam('back')){
             return $resultredirect->setPath('*/*/edit',['id'=>$model->getId(),'_current'=>true]);
        }
         return $resultredirect->setPath('*/*/index');
     }catch(\Exception $e){
        $this->messageManager->addErrorMessage($e->getMessage());
    }
     return $resultredirect->setPath('*/*/index');
}
}