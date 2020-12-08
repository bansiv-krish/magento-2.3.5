<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Model;

use Bansi\FirstModule\Api\Size;


class Small implements Size 
{
	
   public function getSize(){
    	return 'Small';
    }
}
