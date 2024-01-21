<?php

require_once __DIR__ . '/../autoload.php';

use Singleton\LogsSingleton;


$instance = LogsSingleton::getInstance();

$newInstance = LogsSingleton::getInstance();

if($instance == $newInstance)
{
    echo 'The instances are the same!'. PHP_EOL;
}
