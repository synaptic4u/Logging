<?php

namespace Synaptic4u;

// if (file_exists(dirname(__FILE__,4) . '/autoload.php')) {
//     require_once dirname(__FILE__,4) . '/autoload.php';
//     var_dump(value: dirname(__FILE__, 4).'/autoload.php');
// }else if (file_exists(dirname(__FILE__, 2) . '/vendor/autoload.php')) {
//     require_once dirname(__FILE__, 2) . '/vendor/autoload.php';
//     var_dump(dirname(__FILE__, 2).'/vendor/autoload.php');
// }else if (file_exists(dirname(__FILE__, 1) . '/vendor/autoload.php')) {
//     require_once dirname(__FILE__, 1) . '/vendor/autoload.php';
//     var_dump(dirname(__FILE__, 1).'/vendor/autoload.php');
// }else if($GLOBALS['_composer_autoload_path']){
//     require_once $GLOBALS['_composer_autoload_path'];
// }

include ($GLOBALS['_composer_autoload_path']) ??  __DIR__ . '/../vendor/autoload.php';

// use Composer\Script\Event;
use Composer\EventDispatcher\Event;
use Composer\Installer\PackageEvent;


class Install{

    // public static function postUpdate(Event $event)
    // {
    //     $composer = $event->getComposer();
    //     // do stuff
    // }

    // public static function postAutoloadDump(Event $event)
    // {
    //     $vendorDir = $event->getComposer()->getConfig()->get('vendor-dir');
    //     require $vendorDir . '/autoload.php';

    //     // some_function_from_an_autoloaded_file();
    // }

    // public static function postPackageInstall(PackageEvent $event)
    // {
    //     $installedPackage = $event->getOperation()->getPackage();
    //     // do stuff
    // }

    // public static function warmCache(Event $event)
    // {
    //     // make cache toasty
    // }
    
    public static function checkLogs(){


        echo "LOG DIR INSTALL SCRIPT RUNNING.\n";
        $logDir = getcwd() . '/logs';
        var_dump($logDir, __DIR__, getcwd());

        if (!is_dir($logDir)) {
            mkdir($logDir, 0775, true);
            echo "Logs directory created.\n";
        } else {
            echo "Logs directory already exists.\n";
        }
    }

}
?>