<?php

spl_autoload_register(function ($class) {
    require_once 'classes/' . $class . '.php';
});

function putRandomBalls($basket)
{
    for ($i = 0; $i < rand(5, 40); $i++) {
        $basket->putBall(new Ball());
    }

    return $basket;
}

$basket = new Box();

putRandomBalls($basket);

$basket->showBalls();
