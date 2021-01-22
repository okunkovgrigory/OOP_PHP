<?php

use FarmAbstraction\classes\Pig;
use FarmAbstraction\classes\Cow;
use FarmAbstraction\classes\Chicken;
use FarmAbstraction\classes\Farm;

spl_autoload_register(function ($className) {

    $prefix = 'FarmAbstraction\\classes';

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

$myFarmAnimals = new Farm();

$myFarmAnimals->addAnimal(new Chicken());

$myFarmAnimals->addAnimal(new Cow());

$myFarmAnimals->addAnimal(new Pig());

$myFarmAnimals->addAnimal(new Pig());

$myFarmAnimals->rollCall();


