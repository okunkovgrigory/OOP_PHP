<?php


namespace AnimalsWorld\classes;


class Bear extends Mammal
{
    public function move()
    {
        echo 'Передвигается медведь!' . PHP_EOL;
    }
}