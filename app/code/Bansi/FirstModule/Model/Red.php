<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Model;

use Bansi\FirstModule\Api\Color;
use Bansi\FirstModule\Api\Brightness;


class Red implements Color 
{
	protected $brightness;
	public function __construct(Brightness $brightness){
    	$this->brightness=$brightness;
    }
   public function getColor(){
    	return 'Red';
    }
}
