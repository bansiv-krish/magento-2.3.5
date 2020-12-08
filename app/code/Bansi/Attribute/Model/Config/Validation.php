<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\Attribute\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;


class Validation extends AbstractBackend 
{
	
  public function validate($object){
  	$attributeCode = $this->getAttribute()->getAttributeCode();
        /** @var int $value */
        $value = (int)$object->getData($attributeCode);
  	if($value<10)
  		 throw new \Magento\Framework\Exception\LocalizedException(__("Value must not be less than 10"));
  		
  	return parent::validate($object);
  } 
}
