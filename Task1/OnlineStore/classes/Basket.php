<?php

require_once 'Product.php';

class Basket
{
    public $products = [];

    public function addProduct(Product $product, $quantity)
    {
        $this->products[] = ['name' => $product->getName(), 'price' => $product->getPrice(), 'quantity' => $quantity];
    }

    public function describe()
    {
        foreach ($this->products as $product) {
            echo "{$product['name']} - Цена: " .
                "{$product['price']} руб. - Количество: {$product['quantity']} шт." . PHP_EOL;
        }
    }

    public function getPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product['price'] * $product['quantity'];
        }
        return $totalPrice;
    }
}