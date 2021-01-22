<?php


namespace CatsFactory\classes;


class Cat
{
    protected $name;
    protected $color;
    protected $age;

    public function __construct($name = 'Garfield', $color = 'orange', $age = 10)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}