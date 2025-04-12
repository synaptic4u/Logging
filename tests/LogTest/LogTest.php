<?php

namespace Synaptic4U\Tests;
/**
 * Checks for the existence of the Composer autoload file two or four directories up
 * from the current file's location. If it exists, includes it to enable
 * autoloading of classes and dependencies.
 */
if (file_exists(dirname(__FILE__,4) . '/autoload.php')) {
    require_once dirname(__FILE__,4) . '/autoload.php';
    // var_dump(dirname(__FILE__, 4).'/autoload.php');
}else if (file_exists(dirname(__FILE__, 2) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
    // var_dump(dirname(__FILE__, 2).'/vendor/autoload.php');
}
use Exception;
use Synaptic4U\Log\Log;

try {
    if (!is_dir(dirname(__DIR__ . '/logs', 5))) {
        mkdir(dirname(__DIR__ . '/logs', 5), 0775, true);
    }else if(!is_dir(dirname(__DIR__ . '/logs', 3))){
        mkdir(dirname(__DIR__ . '/logs', 3), 0775, true);
    
    }

    new Log("This is a test to default activity file.");
} catch (Exception $e) {
    echo "There's a error: ". $e->getMessage() ."";
}