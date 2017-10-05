<?php

namespace Erikt\DumpLayout\Console\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ToggleFlagCommand extends \Symfony\Component\Console\Command\Command
{

    protected function configure()
    {
        $this->setName('erikt:toggle_layout_dump')->setDescription('Toggles Layout Dumping.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {



        $output->writeln('Done');
    }

}