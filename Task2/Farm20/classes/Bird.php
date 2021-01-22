<?php

namespace Farm20\classes;

class Bird extends Animal
{

    public function walk()
    {
        $this->tryToFly();
    }

    public function tryToFly()
    {
        echo 'Вжих-Вжих-топ-топ' . PHP_EOL;
    }

    public function say()
    {
        echo 'Чирик-чирик' . PHP_EOL;
    }
}