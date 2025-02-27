<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Controller\Adminhtml\Index;

/**
 * Catalog index page controller.
 */
class Index extends \Magento\Backend\App\Action 
{
	protected $resultPageFactory;

	
	    protected function _isAllowed()
	{
	 return $this->_authorization->isAllowed('Bansi_CustomAdmin::index');
	}
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
    
     $resultPage = $this->resultPageFactory->create();
     return $resultPage;
    }
}
