<?php

namespace PublicVar\Console\Command;

use PublicVar\Console\Command\BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SystemCommand extends BaseCommand
{
    public function __construct($name = null, $description = '', $keywords = '', $arguments = null, $options = null)
    {
        parent::__construct($name, $description, $keywords, $arguments, $options);
        $this->defineArguments();
    }

    protected function configure()
    {
        $this
            ->setName($this->getName())
            ->setDescription($this->getDescription())
        ;
        
        $this->defineArguments();
        
    
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
    /**
     * Add arguments to the command. Arguments have to be an array
     */
    private function defineArguments(){

        if (!empty($this->arguments) && is_array($this->arguments)) {
            foreach ($this->arguments as $argumentName => $argumentDefinitions) {

                $requirement = InputArgument::REQUIRED;
                $this->addArgument(
                    $argumentName, $requirement, $argumentDefinitions['description']
                );
            }
        }
    }
}
