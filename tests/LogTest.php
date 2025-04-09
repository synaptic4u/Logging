<?php

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

use Synaptic4U\Log\Log;

try {
    new Log("This is a test to default activity file.");
} catch (Exception $e) {
    echo "There's a error: ". $e->getMessage() ."";
}