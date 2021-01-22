<?php


class Fighter extends Plane
{
    protected function flyProcess()
    {
        $this->addLog('Летит прямо, делая бочку!' . PHP_EOL);

    }
}