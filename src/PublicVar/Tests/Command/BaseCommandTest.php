<?php

namespace PublicVar\Tests\Command;

use PublicVar\Console\Command\BaseCommand;

/**
 * Description of BaseCommandTest
 *
 * @author 
 */
class BaseCommandTest extends \PHPUnit_Framework_TestCase
{

    public function testCreateCommand()
    {
        $name = 'test_base_command';
        $description = 'test for base command creation';
        $keywords = 'base commands creation test';
        $arguments = 'arguments';
        $options = 'options';
        
        $expected = array(
          $name,
          $description,
          $keywords,
          $arguments,
          $options,
        );

        $baseCommand = new BaseCommand($name, $description, $keywords, $arguments, $options);
        
        $results= array(
          $baseCommand->getName(),
          $baseCommand->getDescription(),
          $baseCommand->getKeywords(),
          $baseCommand->getArguments(),
          $baseCommand->getOptions(),
        );
        
        $this->assertEquals($expected, $results);
        
    }

}
