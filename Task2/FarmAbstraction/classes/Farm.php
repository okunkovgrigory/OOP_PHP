<?php

namespace FarmAbstraction\classes;

class Farm
{
    public $animals = [];

    public function addAnimal($animal)
    {
        $this->animals[] = $animal;
        $animal->walk();
    }

    public function rollCall()
    {
        shuffle($this->animals);
        foreach ($this->animals as $animal) {
            echo $animal->say();
        }
    }
}