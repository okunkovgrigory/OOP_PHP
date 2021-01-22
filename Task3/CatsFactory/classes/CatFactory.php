<?php


namespace CatsFactory\classes;


class CatFactory
{
    public static function createBlack8YearsOldCat($name)
    {
        return new Cat($name, 'black', 8);
    }

    public static function createGrey4YearsOldCat($name)
    {
        return new Cat($name, 'grey', 4);
    }

    public static function createBrown9YearsOldCat($name)
    {
        return new Cat($name, 'brown', 9);
    }

    public static function createWhiteCat($name, $age)
    {
        return new Cat($name, 'white', $age);
    }

    public static function createBlueSmoke12YearsOldCat($name)
    {
        return new Cat($name, 'blue smoke', 12);
    }

    public static function createBlackSmoke8YearsOldCat($name)
    {
        return new Cat($name, 'black smoke', 8);
    }

    public static function createBlackWithWhiteMarkings3YearsOldCat($name)
    {
        return new Cat($name, 'black with white markings', 3);
    }

    public static function createLeopard7YearsOldCat($name)
    {
        return new Cat($name, 'Leopard', 7);
    }

    public static function createDefaultCat($name)
    {
        return new Cat($name);
    }

    public static function createGarfieldCat()
    {
        return new Cat();
    }
}
