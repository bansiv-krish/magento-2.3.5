<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\HelloWorld\ViewModel;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Element\Template;
/**
 * Catalog index page controller.
 */
class HelloView implements ArgumentInterface
{
     protected $product;

    public function __construct(ProductRepositoryInterface $productRepository){
        $this->product=$productRepository;
       
    }
     public function getHelloworld()
    {
    
      return 'THis is  hello world view model';
    }
    public function getArray()
    {
        $array=['very good','good','brillent'];
      return $array;
    }
     public function getProductName(){
        $product=$this->product->get('24-MB01');
        return $product->getName();
    }
}
