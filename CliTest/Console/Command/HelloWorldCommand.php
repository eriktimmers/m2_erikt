<?php

namespace Erikt\CliTest\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends \Symfony\Component\Console\Command\Command
{

    protected function configure()
    {
        $this->setName('erikt:hello_world')->setDescription('Prints hello world.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World!');
    }

}