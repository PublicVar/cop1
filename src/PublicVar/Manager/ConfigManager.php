<?php

namespace PublicVar\Manager;

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Exception\ParseException;

/**
 * Manage the configuration file
 *
 * @author 
 */
class ConfigManager
{

    protected $yaml;
    protected $configs;

    public function __construct($configFilePath='')
    {
        if (!empty($configFilePath)) {
            $this->setConfigByFilePath($configFilePath);
        }
    }

    public function setConfigByFilePath($configFilePath)
    {
        $this->yaml = new Parser();
        try {
            $this->configs = $this->yaml->parse(file_get_contents($configFilePath));
        } catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }
    }
    
    public function setConfigByFileContents($fileContents)
    {
        $this->yaml = new Parser();
        try {
            $this->configs = $this->yaml->parse($fileContents);
        } catch (ParseException $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }
    }
    
    public function getCommands(){
        return $this->configs['commands'];
    }

}
