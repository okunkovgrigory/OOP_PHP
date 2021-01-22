<?php

require_once 'interfaces/Formatter.php';
require_once 'interfaces/Renderable.php';

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


$strings_array = [
    'Hello, My Friend',
    'Hello, PHP',
    'Hello, World',
    'Hello, Country',
    'No string-to-array',
    'Quote string with slashes in a C style',
    'Quote string with slashes',
    'Convert binary data into hexadecimal representation',
    'Write a formatted string to a stream',
    'Output one or more strings',
];

$objects_array = [
    'someFormatter' => 'SomeFormatter',
    'myRender' => 'MyRender',
    'formattingString' => 'FormattingString',
    'somethingRender' => 'SomethingRender',
    'somethingFormatter' => 'SomethingFormatter',
];

$display = new Display();

foreach ($objects_array as $object) {
    foreach ($strings_array as $string) {
        $display::show(class_exists($object) ? new $object : $object, $string);
    }
}