<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Plugin;




class PluginSolution2  
{
	
   public function beforeExecute(\Bansi\FirstModule\Controller\Page\HelloWorld $product){
     echo "Before excucte sort order 20".'</br>';
   }
   public function afterExecute(\Bansi\FirstModule\Controller\Page\HelloWorld $product){
      echo "After excucte sort order 20".'</br>';
   }
    public function aroundExecute(\Bansi\FirstModule\Controller\Page\HelloWorld $product,callable $proceed){
     echo 'Before Proceed Around sort order 20'.'</br>';
     $name= $proceed();
     echo $name.'</br>';
  echo 'after proced Around sort order 20'.'</br>';
return $name;

   }
   // public function beforeSetName(\Bansi\FirstModule\Controller\Page\HelloWorld $product, $name){
   // 	return "Before Plugin" .$name;
   // }
   // public function afterGetName(\Bansi\FirstModule\Controller\Page\HelloWorld $product, $result){
   // 	return $result .'After Plugin';
   // }
//     public function aroundGetName(\Bansi\FirstModule\Controller\Page\HelloWorld $product,callable $proceed){
//    	echo 'Around plugin'.'</br>';
//    	$name= $proceed();
//    	echo $name.'</br>';
// echo 'after proced'.'</br>';
// return $name;

//    }
//     public function aroundGetIdBySku(\Bansi\FirstModule\Controller\Page\HelloWorld $product,callable $proceed,$sku)
//     {
//     	echo 'Around plugin'.'</br>';
//    	$id= $proceed($sku);
//    	echo $id.'</br>';
// echo 'after proced'.'</br>';
// return $id;
//     }
}
