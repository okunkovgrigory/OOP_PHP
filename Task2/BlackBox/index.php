<?php

spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});

// Creating engineer

$engineer = new Engineer();

// Creating plane

$boeing747 = new Plane(new BlackBox());
$boeing747->flyAndCrush();

$engineer->takeBox($boeing747);

// Creating fighter

$su27 = new Fighter(new BlackBox());
$su27->flyAndCrush();

$engineer->takeBox($su27);
