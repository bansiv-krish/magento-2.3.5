<?php


namespace Bansi\ApiModule\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Resource model for category entity
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class GreetingMessage extends AbstractDb
{
  protected function _construct()
    {
        $this->_init('greeting_message', 'greeting_id');
    }

}