<?php


class FormattingString implements Formatter
{

    public function format($string)
    {
        echo $string . ' formatting' . PHP_EOL;
    }
}