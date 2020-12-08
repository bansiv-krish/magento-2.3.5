<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Model;
use Bansi\FirstModule\Api\PenInterface;
use Bansi\FirstModule\Api\Color;
use Bansi\FirstModule\Api\Size;

class Student 
{
	private $name;
	private $age;
	private $scorces;
  	public function __construct( $name ='JOy', $age=25, array $scorces=array('maths'=>98,'science'=>99)){
  		$this->name=$name;
  		$this->age=$age;
  		$this->scorces=$scorces;
  	}
  
}
