<?php

namespace Synaptic4U\Tests;
/**
 * Checks for the existence of the Composer autoload file two or four directories up
 * from the current file's location. If it exists, includes it to enable
 * autoloading of classes and dependencies.
 */

echo getcwd().PHP_EOL;
echo getenv("PWD").PHP_EOL;

if (file_exists(getcwd() . '/vendor/autoload.php')) {

    require_once getcwd() . '/vendor/autoload.php';
}else if (file_exists(dirname(__FILE__, 2) . '/vendor/autoload.php')) {

    require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
}else{

    echo 'EXITING: CANNOT AUTOLOAD!'.PHP_EOL;
    exit;
}


use Exception;
use Synaptic4U\Log\Log;

try {

    new Log("This is a test to default activity file.", 'activity');
} catch (Exception $e) {
 
    echo "There's a error: ". $e->getMessage() ."";
}