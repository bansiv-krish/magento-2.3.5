<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\RequestFlow\Controller\Page;
use Magento\Framework\App\RespnseInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;
/**
 * Catalog index page controller.
 */
class ResponseType extends \Magento\Framework\App\Action\Action 
{
   
   protected $pageFactory;
   protected $jsonFactory;
   protected $raw;
   protected $forwardFactory;
   protected $redirectFactory;
    public function __construct(Context $context,
        PageFactory $pageFactory,JsonFactory $jsonFactory, Raw 
         $raw, ForwardFactory $forwardFactory,RedirectFactory $redirectFactory) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->raw = $raw;
        $this->forwardFactory = $forwardFactory;
        $this->redirectFactory = $redirectFactory;
      }
    public function execute()
    {
   
  //   return $this->pageFactory->create();
    	 //  return $this->jsonFactory->create()->setData(['key'=>1455]);
    	//$result=$this->raw->setContents('hello world');
    	  //    return $result;
    	// $result=$this->forwardFactory->create();
    	// $result->setModule('noroutefound')->setController('page')->forward('customnoroute');
    	// return $result;
    	$result=$this->redirectFactory->create();
    	$result->setPath('tutorial/page/helloworld');
    	return $result;
    }
}
