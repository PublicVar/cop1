#!/usr/bin/env php
<?php
// application.php

require __DIR__.'/vendor/autoload.php';

use Symfony\Component\Console\Application;
use PublicVar\Manager\ConfigManager;

$configManager = new ConfigManager('config/commands.yml');

$application = new Application();
$application->run();