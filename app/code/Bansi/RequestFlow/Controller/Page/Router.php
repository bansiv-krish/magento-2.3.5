<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\RequestFlow\Controller\Page;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\ActionFactory;
/**
 * Catalog index page controller.
 */
class Router implements \Magento\Framework\App\RouterInterface

{   
	protected $actionFactory;
	public function __construct(
        \Magento\Framework\App\ActionFactory $actionFactory
     
    ) {
        $this->actionFactory = $actionFactory;
       
    }
    public function match(RequestInterface $request)
    {

    	 $identifier=trim($request->getPathInfo(),'/');
    	// $paths=explode('-', $path);
    	// $request->setModuleName($paths[0]);
     //    $request->setControllerName($paths[1]);
     //    $request->setActionName($paths[2]);
    	// if (strpos($identifier, 'learning') !== false) {
     //        $request->setModuleName('tutorial');
     //        $request->setControllerName('page');
     //        $request->setActionName('helloworld');
        
     //    }
 $request->setModuleName('tutorial');
            $request->setControllerName('page');
            $request->setActionName('helloworld');
    	return $this->actionFactory->create('\Magento\Framework\App\Action\Forward',['request'=>$request]);
    }
}
