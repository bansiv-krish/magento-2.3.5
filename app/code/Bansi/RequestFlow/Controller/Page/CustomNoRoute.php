<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\RequestFlow\Controller\Page;
use Magento\Framework\App\Action\Context;

/**
 * Catalog index page controller.
 */
class CustomNoRoute extends \Magento\Framework\App\Action\Action 
{
   
    public function execute()
    {
   
       echo 'RequestFlow action';
    }
}
