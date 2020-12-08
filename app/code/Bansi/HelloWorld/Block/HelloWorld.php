<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\HelloWorld\Block;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Template;
/**
 * Catalog index page controller.
 */
class HelloWorld extends \Magento\Framework\View\Element\Template
{
    protected $product;

    public function __construct(ProductRepositoryInterface $productRepository,Template\Context $context,array $data=[]){
    	$this->product=$productRepository;
    	parent::__construct($context,$data);
    }
    
    // public function getHelloworld()
    // {
    
    //   return 'THis is hello world';
    // }
    // public function getArray()
    // {
    // 	$array=['very good','good','brillent'];
    //   return $array;
    // }
    public function getProductName(){
    	$product=$this->product->get('24-MB01');
    	return $product->getName();
    }
}
