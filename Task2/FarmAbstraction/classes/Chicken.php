<?php

namespace FarmAbstraction\classes;

class Chicken extends Animals
{
    public function say()
    {
        echo 'Курлык-курлык-курлык' . PHP_EOL;
    }
}