<?php


class Creator
{
    public static function create($name)
    {
        if (class_exists($name) and get_parent_class($name) === 'Item') {

            return new $name($name);
        } else {
            return new EmptyItem($name);
    }
    }
}