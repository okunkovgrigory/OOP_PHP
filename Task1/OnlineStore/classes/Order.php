<?php

require_once 'Basket.php';

class Order
{
    private $basket = [];

    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    public function getBasket()
    {
        echo '-------Корзина товаров-------' . PHP_EOL;
        $this->basket->describe();
    }
    public function getPrice()
    {
        return 'Сумма заказа: ' . $this->basket->getPrice() . ' руб.';
    }
}