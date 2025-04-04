<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7614c4af4a4f30f30246e59606e8fac4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Synaptic4U\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Synaptic4U\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/synaptic4u/db/src',
            2 => __DIR__ . '/..' . '/synaptic4u/db/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Synaptic4U\\DB\\DB' => __DIR__ . '/..' . '/synaptic4u/db/src/DB/DB.php',
        'Synaptic4U\\DB\\IDBInterface' => __DIR__ . '/..' . '/synaptic4u/db/src/DB/IDBInterface.php',
        'Synaptic4U\\DB\\MYSQL' => __DIR__ . '/..' . '/synaptic4u/db/src/DB/MYSQL.php',
        'Synaptic4U\\DB\\MYSQL\\MYSQL' => __DIR__ . '/..' . '/synaptic4u/db/src/DB/MYSQL/MYSQL.php',
        'Synaptic4U\\Log\\Log' => __DIR__ . '/../..' . '/src/Log/Log.php',
        'Synaptic4U\\Log\\LogDB' => __DIR__ . '/../..' . '/src/Log/LogDB.php',
        'Synaptic4U\\Log\\LogFile' => __DIR__ . '/../..' . '/src/Log/LogFile.php',
        'Synaptic4U\\Log\\LogInterface' => __DIR__ . '/../..' . '/src/Log/LogInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7614c4af4a4f30f30246e59606e8fac4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7614c4af4a4f30f30246e59606e8fac4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7614c4af4a4f30f30246e59606e8fac4::$classMap;

        }, null, ClassLoader::class);
    }
}
