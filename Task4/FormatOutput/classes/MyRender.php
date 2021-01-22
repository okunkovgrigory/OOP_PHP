<?php


class MyRender implements Renderable
{
    public function render($string)
    {
        echo 'Строка ' . $string . ' - отрендерена!' . PHP_EOL;
    }
}