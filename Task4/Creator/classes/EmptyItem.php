<?php


class EmptyItem extends Item
{

    public function show()
    {
        echo 'Класс ' . ucfirst($this->getName()) . ' не найден' . PHP_EOL;
    }
}