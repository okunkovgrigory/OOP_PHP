<?php

require_once 'Toy.php';

class ToyFactory
{
    public $toys = [];

    public function createToy($name)
    {
        return new Toy($name, rand(500, 1000));
    }

    public function createManyToys(array $name, $min, $max) {
        for ($i = 0; $i < rand($min, $max); $i++) {
            $this->toys[] = $this->createToy($name[array_rand($name)]);
        }
    }

    public function showToysInfo()
    {
        foreach ($this->toys as $toy) {
            echo "Название игрушки: {$toy->name} - Стоимость игрушки: {$toy->price} руб." . PHP_EOL;
        }
    }

    public function getTotalPriceAllToys()
    {
        $totalPrice = 0;
        foreach ($this->toys as $toy) {
            $totalPrice += $toy->price;
        }
        return 'Итого: ' . $totalPrice . ' руб.';
    }

}