<?php


class Box
{
    public function putBall(Ball $ball)
    {
        echo "В корзину добавлен мяч {$ball::$count}" . PHP_EOL;
    }

    public function showBalls()
    {
        echo 'Всего мячей: ' . Ball::$count;
    }
}