<?php


class Chair
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function burn()
    {
        return new BlueFlame();
    }

    public function __toString()
    {
        return "{$this->name}";
    }

}