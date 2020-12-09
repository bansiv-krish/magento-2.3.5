<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\CustomAdmin\Controller\Page;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
/**
 * Catalog index page controller.
 */
class Index extends \Magento\Framework\App\Action\Action 
{
    protected $scopeconfiginterface;
    public function __construct(Context $context,ScopeConfigInterface $scopeconfiginterface) {
        parent::__construct($context);
      $this->scopeconfiginterface=$scopeconfiginterface;
       
    }
    public function execute()
    {
   
       echo $this->scopeconfiginterface->getValue('firstSection/firstGroup/firstField');
       print_r($this->scopeconfiginterface->getValue('firstSection/firstGroup/thridField'));
    }
}
