<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Model;




class PenFactory 
{
	private $objectmanager;
   	public function __construct(\Magento\Framework\ObjectManagerInterface $objectmanager){
  		$this->objectmanager=$objectmanager;
  		
  	}
  	public function create(array $data){
  		return $this->objectmanager->create('Bansi\FirstModule\Api\PenInterface',$data);
  	}
}
