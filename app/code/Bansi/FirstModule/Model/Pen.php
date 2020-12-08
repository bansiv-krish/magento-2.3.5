<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Model;
use Bansi\FirstModule\Api\PenInterface;
use Bansi\FirstModule\Api\Color;
use Bansi\FirstModule\Api\Size;

class Pen implements PenInterface 
{
	protected $color;
	protected $size;
	protected $name;
	protected $school;
  	public function __construct(Color $color, Size $size, $name=null,$school=null){
  		$this->color=$color;
  		$this->size=$size;
  		$this->name=$name;
  		$this->school=$school;
  	}
   public function getType(){
    	return 'Pen has color'.$this->color->getColor().'and size:'.$this->size->getSize();
    }
}
