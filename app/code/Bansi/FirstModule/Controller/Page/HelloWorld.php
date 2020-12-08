<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use Bansi\FirstModule\Api\PenInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Bansi\FirstModule\Model\PenFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use Bansi\FirstModule\Model\HeavyService;
/**
 * Catalog index page controller.
 */
class HelloWorld extends \Magento\Framework\App\Action\Action 
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    
    protected $PenInterface;
    protected $productRepositoryInterface;
    protected $penfactory;
   protected $_eventmanager;
   protected $http;
   protected $heavyService;
    public function __construct(Context $context,
        PenInterface $PenInterface ,ProductRepositoryInterface $productRepositoryInterface,PenFactory $penfactory,ManagerInterface $_eventmanager,Http $http, HeavyService $heavyService) {
        parent::__construct($context);
        $this->PenInterface = $PenInterface;
        $this->penfactory = $penfactory;
      $this->_eventmanager = $_eventmanager;
      $this->http = $http;
      $this->heavyService = $heavyService;
        $this->productRepositoryInterface = $productRepositoryInterface;
    }
    public function execute()
    {
   
       //  $message = new \Magento\Framework\DataObject(array('greeting'=>'hi test Gm'));
       // $this->_eventmanager->dispatch('çustom_event',['greeting'=>$message]);
       //  echo $message->getGreeting();
        $id=$this->http->getParam('id',0);
        if($id==1){
            $this->heavyService->printMessage();
        }else{
          echo "heavy service not used";
        }
    }
}
