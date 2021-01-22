<?php

spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});

$forge = new Forge();

$audi = new Car('Audi');

$adidasBoots = new Shoes('Sneaker');

$table = new Table('TableIKEA');

$chair = new Chair('ChairIKEA');

$macbook = new Car('Macbook');

$forge->burn($audi);
$forge->burn($adidasBoots);
$forge->burn($table);
$forge->burn($chair);
$forge->burn($macbook);
