<?php

use PublicVar\Manager\ConfigManager;
use Symfony\Component\Yaml\Parser;

/**
 * Description of newPhpUnitTest
 *
 * @author 
 */
class ConfigManagerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \PHPUnit_Framework_Error_Warning
     */
    public function testFileNotFound()
    {
        $configManager = new ConfigManager('dummy/files/path.yml');
    }

    public function testFileFound()
    {
        $configManager = new ConfigManager('app/config/commands.yml');
    }

    public function testGetConfigByFileContents()
    {
        $configManager = new ConfigManager();
        $this->yaml = new Parser();
        $fileContents = file_get_contents('app/config/commands.yml');
        $configManager->setConfigByFileContents($fileContents);
    }

    public function testGetCommands()
    {
        $configManager = new ConfigManager('src/PublicVar/Tests/Manager/commands_pattern.yml');
        $expected = array(
          'create_user' => array(
            'structure' => 'useradd @username',
            'description'=> 'Create a linux user',
            'super_user' => true,
            'keywords' => 'create user',
            'arguments'=>array(
                'username'=>array('description' => 'linux username')
            )
          )
        );
        $result = $configManager->getCommands();
        $this->assertEquals($expected, $result);
    }

}
