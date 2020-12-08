<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Observer;
use Magento\Framework\Event\Observer as Event;
use Magento\Framework\Event\ObserverInterface;


class OurObserver implements ObserverInterface
{
	
  public function execute(Event $event){
   $message=$event->getData('greeting');
   $message->setGreeting('Good Evening');
  }
}
