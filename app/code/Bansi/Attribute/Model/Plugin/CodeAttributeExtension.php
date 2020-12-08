<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\Attribute\Model\Plugin;

use Bansi\ApiModule\Api\Data\GreetingMessageExtensionFactory;
use Bansi\ApiModule\Model\GreetingMessagenew;

class CodeAttributeExtension  
{
  private $extensionFactory;
  public function __construct(GreetingMessageExtensionFactory $extensionFactory){
    $this->extensionFactory=$extensionFactory;
  }
    public function beforeGetList(GreetingMessagenew $product){
     echo "Before excucte sort order 10".'</br>';
   }
   
 public function aroundGetGreetingMessage(GreetingMessagenew $message,\Closure $proceed,$id){
   
    $model=$proceed($id);
  
    $extensionAttributes=$model->getExtensionAttributes();
    if($extensionAttributes==null){
      $extensionAttributes=$this->extensionFactory->create();
    }
   

    $extensionAttributes->setCode('Code #'.$id);
   $model->setExtensionAttributes($extensionAttributes);
   return $model;
}
}