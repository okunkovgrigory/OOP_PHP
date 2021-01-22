<?php


class Display
{
    public static function show($formatter, $string)
    {
        if (gettype($formatter) !== 'object') {
            echo $string . PHP_EOL;
        } else {
            if ($formatter instanceof Formatter) {
                $formatter->format($string);
            } elseif ($formatter instanceof Renderable) {
                $formatter->render($string);
            } elseif (!$formatter instanceof Formatter and get_class_methods($formatter)[0] === 'format') {
                $formatter->format($string);
            } else {
                echo $string . PHP_EOL;
            }
        }
    }
}