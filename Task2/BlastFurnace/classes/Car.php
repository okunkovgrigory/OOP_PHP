<?php


class Car
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function burn()
    {
        return new RedFlame();
    }

    public function __toString()
    {
        return "{$this->name}";
    }

}