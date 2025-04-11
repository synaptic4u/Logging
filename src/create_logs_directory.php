<?php

namespace Synaptic4u\Logging;

echo "LOG DIR INSTALL SCRIPT RUNNING.\n";
$logDir = getcwd() . '/logs';
var_dump($logDir, __DIR__, getcwd());

if (!is_dir($logDir)) {
    mkdir($logDir, 0775, true);
    echo "Logs directory created.\n";
} else {
    echo "Logs directory already exists.\n";
}
?>