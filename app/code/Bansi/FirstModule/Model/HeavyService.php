<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Model;




class HeavyService 
{
	
 public function __construct(){
  		echo 'Heavy Service Started'.'</br>';
  	}
  	public function printMessage(){
  		echo 'Heavy Service message';
  	}
}
