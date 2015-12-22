<?php

namespace PublicVar\Console\Command;

namespace Acme\Console\Command;

use PublicVar\Console\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class SystemCommand extends BaseCommand
{

    protected function configure()
    {
        $this
            ->setName($this->getName())
            ->setDescription($this->getDescription())
        ;
        if (!empty($this->arguments) && is_array($this->arguments)) {
            foreach ($this->arguments as $argument) {

                $requirement = InputArgument::REQUIRED;

                $this->addArgument(
                    $argument['name'], $requirement, $argument['description']
                );
            }
        }
    
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
    
}
