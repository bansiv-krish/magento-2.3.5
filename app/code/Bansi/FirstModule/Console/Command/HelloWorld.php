<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Bansi\FirstModule\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
class HelloWorld extends Command 
{
	const NAME = 'name';
   	public function configure(){
   		$this->setName('my:first:command')->setDescription('the Command print message');
   		$this->addOption(
                self::NAME,
                null,
                InputOption::VALUE_REQUIRED,
                'Name'
            );
   	}
   	public function execute(InputInterface $input, OutputInterface $output){
   			 //$output->writeln("Hello World gfgf");
   			  if ($name = $input->getOption(self::NAME)) {
                $output->writeln('<info>Provided name is `' . $name . '`</info>');
            }	

            $output->writeln('<info>Hello World.</info>');
            $output->writeln('<info>Success Message.</info>');
   	}
}
