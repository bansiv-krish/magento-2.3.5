<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\Attribute\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;


class Options extends AbstractSource 
{
	
  public function getAllOptions(){
  	$this->_options=[
  		['label'=>__('Gold'),'value'=>'gold'],
  		['label'=>__('Sliver'),'value'=>'sliver'],
  		['label'=>__('Bronze'),'value'=>'bronze']
  	];
  	return $this->_options;
  } 
}
