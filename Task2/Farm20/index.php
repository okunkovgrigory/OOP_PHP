<?php

use Farm20\classes\BirdFarm;
use Farm20\classes\Farm;
use Farm20\classes\Farmer;
use Farm20\classes\Chicken;
use Farm20\classes\Turkey;
use Farm20\classes\Goose;
use Farm20\classes\Horse;
use Farm20\classes\Pig;
use Farm20\classes\Cow;

spl_autoload_register(function ($className) {

    $prefix = 'Farm20\\classes';

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

$farmerIvan = new Farmer();

$hoofFarm = new Farm();
$birdFarm = new BirdFarm();

$farmerIvan->addAnimal($hoofFarm, new Cow());
$farmerIvan->addAnimal($hoofFarm, new Pig());
$farmerIvan->addAnimal($hoofFarm, new Pig());
$farmerIvan->addAnimal($birdFarm, new Goose());
$farmerIvan->addAnimal($birdFarm, new Turkey());
$farmerIvan->addAnimal($birdFarm, new Turkey());
$farmerIvan->addAnimal($birdFarm, new Turkey());
$farmerIvan->addAnimal($birdFarm, new Chicken());
$farmerIvan->addAnimal($hoofFarm, new Horse());
$farmerIvan->addAnimal($hoofFarm, new Horse());

$birdFarm->showAnimalsCount();
$hoofFarm->showAnimalsCount();

$farmerIvan->rollCall($hoofFarm);
$farmerIvan->rollCall($birdFarm);



