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

function calculateArrayItems($value_1, $value_2, array $callbacks, Calculator $calculator)
{
    foreach ($callbacks as $callback) {
        print_r($calculator::calculate($value_1, $value_2, $callback));
    }
}

function diff($value_1, $value_2)
{
    return $value_1 - $value_2 . PHP_EOL;
}


$callbacks = [
    'compare' => function($value_1, $value_2) {
        return $value_1 + $value_2 . PHP_EOL;
    },
    'difference' => 'diff',
    'product' => [ProdAndDiv::class, 'prod'],
    'division' =>[ProdAndDiv::class, 'div'],
];

$calculator = new Calculator();

calculateArrayItems(5, 10, $callbacks, $calculator);