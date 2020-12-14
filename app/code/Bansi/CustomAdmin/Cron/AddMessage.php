<?php

namespace Bansi\CustomAdmin\Cron;
use Bansi\ApiModule\Model\GreetingMessageFactory;

class AddMessage 
{
    protected $greetingMessageFactory;

    public function __construct(GreetingMessageFactory $greetingMessageFactory) {
     
      $this->greetingMessageFactory=$greetingMessageFactory;
       
    }
    public function execute()
    {
   
      $this->greetingMessageFactory->create()->setName('scheduled message')->setDescription('Created at '.time())->save();
    }
}
