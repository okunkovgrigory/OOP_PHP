<?php

spl_autoload_register(function ($classname) {
    require_once 'classes/' . $classname . '.php';
});

// Creating basket

$basket = new Basket();

$basket->addProduct(new Product('Мыло', '50'), 5);
$basket->addProduct(new Product('Шампунь', '250'), 2);
$basket->addProduct(new Product('Зубная паста', '100'), 1);
$basket->addProduct(new Product('Щетка зубная', '180'), 1);
$basket->addProduct(new Product('Мочалка', '70'), 1);
$basket->addProduct(new Product('Губки', '40'), 3);
$basket->addProduct(new Product('Гель для душа', '140'), 2);

// Creating order

$order = new Order($basket);
$order->getBasket();
echo $order->getPrice();

