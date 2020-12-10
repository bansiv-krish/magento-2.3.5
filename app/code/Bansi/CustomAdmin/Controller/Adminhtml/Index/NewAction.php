<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Controller\Adminhtml\Index;
use Magento\Framework\App\ResponseInterface;
use Magento\Backend\Model\View\Result\ForwardFactory;
/**
 * Catalog index page controller.
 */
class NewAction extends \Magento\Backend\App\Action
{
	protected $forwardfactory;

	
	    protected function _isAllowed()
	{
	 return $this->_authorization->isAllowed('Bansi_CustomAdmin::menu');
	}
    
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        ForwardFactory $forwardfactory
    ) {
        parent::__construct($context);
        $this->forwardfactory = $forwardfactory;
    }

    public function execute()
    {
    
     $resultforward = $this->forwardfactory->create();
     return $resultforward->forward('edit');
    }
}
