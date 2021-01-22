<?php

require_once 'classes/ToyFactory.php';

error_reporting(-1);

// Random names of toys

$toysNames = ['Andy', 'Brownie', 'Candy', 'Dream', 'Ese', 'Fletcher', 'Grew', 'Hugo', 'Indy', 'Jessy'];

$factory = new ToyFactory();

$factory->createManyToys($toysNames, 5, 20);

$factory->showToysInfo();

echo $factory->getTotalPriceAllToys();
