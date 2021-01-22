<?php

spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});

$import = new Import();
$import->from(new FileReader('uploads/example.txt'));
$import->to(new FileWriter('titleExampleFirstLine.txt'));
$import->with(new UpperCaseConverter());
$import->execute();