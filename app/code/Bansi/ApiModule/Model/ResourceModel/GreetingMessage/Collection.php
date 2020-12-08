<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\ApiModule\Model\ResourceModel\GreetingMessage;

use Bansi\ApiModule\Model\GreetingMessage;
use Bansi\ApiModule\Model\ResourceModel\GreetingMessage as GreetingMessageresource;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
   
   
    protected function _construct()
    {
       //   parent::_construct();
        $this->_init('Bansi\ApiModule\Model\GreetingMessage', 'Bansi\ApiModule\Model\ResourceModel\GreetingMessage');
    }


}