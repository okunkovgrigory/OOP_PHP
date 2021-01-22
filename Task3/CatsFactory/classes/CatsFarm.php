<?php


namespace CatsFactory\classes;


class CatsFarm
{
    private $cats = [];

    public function addCat(Cat $cat)
    {
        $this->cats[] = $cat;
    }

    public function getCats()
    {
        foreach ($this->cats as $cat)
        {
            echo "Произвище кота: {$cat->getName()}. Цвет кота: {$cat->getColor()}. Возраст кота: {$cat->getAge()}"
                . PHP_EOL;
        }
    }
}