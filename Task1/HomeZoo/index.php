<?php

spl_autoload_register(function($classname){
    require_once 'classes/' . $classname . '.php';
});

// Creating three cats

$catTim = new Cat('Tim');
$catFis = new Cat('Fis');
$catKassy = new Cat('Kassy');

// Creating five dogs

$dogMax = new Dog('Max');
$dogAlfie = new Dog('Alfie');
$dogCharlie = new Dog('Charlie');
$dogBella = new Dog('Bella');
$dogPoppy = new Dog('Poppy');

// Creating one fish

$fishFlora = new Fish('Flora');

// For example

print_r('Кличка кота: ' . $catFis->name . PHP_EOL);
print_r('Кличка собаки: ' . $dogMax->name . PHP_EOL);
print_r('Кличка рыбки: '  . $fishFlora->name . PHP_EOL);