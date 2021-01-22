<?php


class Ball
{
    public static $count = 0;

    public function __construct()
    {
        self::$count++;
    }
}