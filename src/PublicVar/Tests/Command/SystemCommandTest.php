<?php

namespace PublicVar\Tests\Command;

use PublicVar\Console\Command\SystemCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;

/**
 * Description of SystemCommandTest
 *
 * @author 
 */
class SystemCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testConfigureSystemCommand()
    {
        $name = 'test_base_command';
        $description = 'test for base command creation';
        $keywords = 'base commands creation test';
        $arguments = array(
          'username' => array('description' => 'linux username')
        );
        $options = 'options';
        
        $expectedArguments = new InputDefinition();
        $expectedArguments->addArgument(new InputArgument('username',InputArgument::REQUIRED,$arguments['username']['description']));

        $systemCommand = new SystemCommand($name, $description, $keywords, $arguments, $options);
        
        $this->assertEquals($expectedArguments, $systemCommand->getDefinition());
    }

}
