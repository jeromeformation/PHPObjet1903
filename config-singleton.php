<?php

require 'autoloader.php';

use Classes\Config;

$config1 = Config::getInstance();
$config1->setData("Nouvelle donnée");

$config2 = Config::getInstance();
echo $config2->getData();