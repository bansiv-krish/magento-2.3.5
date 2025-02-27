<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\JqueryUi\Controller\Page;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
/**
/**
 * Catalog index page controller.
 */
class ImageCanvas extends \Magento\Framework\App\Action\Action 
{
    
     
    protected $pageFactory;

    public function __construct(PageFactory $pageFactory,Context $context){
    	$this->pageFactory=$pageFactory;
    	parent::__construct($context);
    }
    
    public function execute()
    {
    	
      return $this->pageFactory->create();
    }
}
