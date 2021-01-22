<?php

spl_autoload_register(function ($className) {

    $prefix = '';

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

$object_box = [
    'rabbit' => 'Rabbit',
    'parrot' => 'Parrot',
    'hamster' => 'Hamster',
    'frog' => 'Frog',
    'pappy' => 'Pappy',
    'kitten' => 'Kitten',
    'rat' => "Rat",
    'dog' => 'Dog',
    'cat' => 'Cat',
    'mouse' => 'Mouse',
];

$creator = new Creator();

foreach ($object_box as $object => $value) {
    $creator::create($object)->show();
}