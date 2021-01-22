<?php

namespace EverythingInItsPlace\classes;

class Manager
{
    public function place($item)
    {
        if (gettype($item) === 'object') {
            if (substr(strrchr(get_class($item), '\\'), 1) === 'Papers') {
                echo 'Положил ' . substr(strrchr(get_class($item), '\\'), 1) . ' на стол' . PHP_EOL;
            } elseif (substr(strrchr(get_class($item), '\\'), 1) === 'Instrument') {
                echo 'Убрал ' . substr(strrchr(get_class($item), '\\'), 1) . ' внутрь стола' . PHP_EOL;
            } else {
                echo 'Выкинул ' . substr(strrchr(get_class($item), '\\'), 1) . ' в корзину' . PHP_EOL;
            }
        } else {
            echo 'Выкинул ' . $item . ' в корзину' . PHP_EOL;
        }
    }
}