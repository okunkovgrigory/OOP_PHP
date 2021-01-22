<?php


abstract class Item
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo 'Я ' . $this->name . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }
}
