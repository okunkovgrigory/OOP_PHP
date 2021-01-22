<?php

namespace Farm20\classes;

class BirdFarm extends Farm
{
    protected $animals = [];

    protected  $countAnimals = 0;

    public function addAnimal($animal)
    {
        if (get_parent_class($animal) == __NAMESPACE__ . '\Bird') {
            $this->animals[] = $animal;
            echo 'Добавлена птица ' . substr(get_class($animal), strlen(__NAMESPACE__) + 1) . PHP_EOL;
            $this->countAnimals++;
        } else {
            echo substr(get_class($animal), strlen(__NAMESPACE__) + 1) .' - не птица!'  . PHP_EOL;
        }
    }

    public function showAnimalsCount()
    {
        echo "Количество птиц на ферме: " . $this->countAnimals++ . PHP_EOL;
    }
}