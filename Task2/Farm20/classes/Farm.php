<?php

namespace Farm20\classes;

class Farm
{
    protected $animals = [];

    protected $countAnimals = 0;

    public function addAnimal($animal)
    {
        if (get_parent_class($animal) == __NAMESPACE__ . '\Animal') {
            $this->animals[] = $animal;
            echo 'Добавлено животное ' . substr(get_class($animal), strlen(__NAMESPACE__) + 1) . PHP_EOL;
            $this->countAnimals++;
        } else {
            echo substr(get_class($animal), strlen(__NAMESPACE__) + 1) .' - не животное!'  . PHP_EOL;
        }
    }

    public function rollCall()
    {
        shuffle($this->animals);
        foreach ($this->animals as $animal) {
            echo $animal->say();
        }
    }

    public function showAnimalsCount()
    {
        echo "Количество животных на ферме: " . $this->countAnimals++ . PHP_EOL;
    }
}