<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Observer;
use Magento\Framework\Event\Observer as Event;
use Magento\Framework\Event\ObserverInterface;


class LogTextatCheckout implements ObserverInterface
{
	
  public function execute(Event $event){
    $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
    $logger = new \Zend\Log\Logger();
    $logger->addWriter($writer);
    $logger->info('sfds text mrs');
  }
}
