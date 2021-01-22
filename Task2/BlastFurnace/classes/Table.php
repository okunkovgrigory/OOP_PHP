<?php


class Table
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function burn()
    {
        return new Smoke();
    }

    public function __toString()
    {
        return "{$this->name}";
    }
}