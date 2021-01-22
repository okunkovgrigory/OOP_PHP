<?php

use AnimalsWorld\classes\Bear;
use AnimalsWorld\classes\Camel;
use AnimalsWorld\classes\Chicken;
use AnimalsWorld\classes\Dolphin;
use AnimalsWorld\classes\Elephant;
use AnimalsWorld\classes\Fish;
use AnimalsWorld\classes\Moose;
use AnimalsWorld\classes\Snake;
use AnimalsWorld\classes\Tiger;

spl_autoload_register(function ($className) {

    $prefix = 'AnimalsWorld\\classes';

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

function showMoveAnimal($animals)
{
    foreach ($animals as $animal) {
        echo $animal->move();
    }
}

$animals = [
    new Bear(),
    new Tiger(),
    new Chicken(),
    new Snake(),
    new Camel(),
    new Moose(),
    new Fish(),
    new Dolphin(),
    new Elephant()
];

showMoveAnimal($animals);
