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
class CustomNoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface 
{
   
     public function process(\Magento\Framework\App\RequestInterface $request){
     	$request->setRouteName('noroutefound')->setControllerName('page')->setActionName('customnoroute');
     	return true;
     }
}
