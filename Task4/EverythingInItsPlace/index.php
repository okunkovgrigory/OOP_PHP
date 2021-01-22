<?php

use \EverythingInItsPlace\classes\Papers;
use \EverythingInItsPlace\classes\Instrument;
use \EverythingInItsPlace\classes\Manager;


spl_autoload_register(function ($className) {

    $prefix = 'EverythingInItsPlace\\classes';

    $base_dir = __DIR__ . '/classes/';

    $len = strlen($prefix);

    if (strncmp($prefix, $className, $len) !== 0) {
        return;
    }

    $relative_class = substr($className, $len);

    $file = $base_dir . str_replace('\\', DIRECTORY_SEPARATOR, $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});


$manager = new Manager();

$manager->place(new Papers());

$manager->place('Garbage');

$manager->place(new Instrument());

$manager->place('Sock');

$manager->place('Box');
