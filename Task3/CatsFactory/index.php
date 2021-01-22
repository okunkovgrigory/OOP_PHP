<?php

use CatsFactory\classes\CatFactory;
use CatsFactory\classes\CatsFarm;


spl_autoload_register(function ($className) {

    $prefix = 'CatsFactory\\classes';

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


$catsFarm = new CatsFarm();
$catsFarm->addCat(CatFactory::createGarfieldCat());
$catsFarm->addCat(CatFactory::createDefaultCat('Ron'));
$catsFarm->addCat(CatFactory::createBlack8YearsOldCat('Pretty'));
$catsFarm->addCat(CatFactory::createBlackSmoke8YearsOldCat('Smile'));
$catsFarm->addCat(CatFactory::createBrown9YearsOldCat('Brownie'));
$catsFarm->addCat(CatFactory::createBlackWithWhiteMarkings3YearsOldCat('White Feather'));
$catsFarm->addCat(CatFactory::createGrey4YearsOldCat('Grey Cat'));
$catsFarm->addCat(CatFactory::createLeopard7YearsOldCat('Leopard'));
$catsFarm->addCat(CatFactory::createBlueSmoke12YearsOldCat('Blue Smoke'));
$catsFarm->getCats();

