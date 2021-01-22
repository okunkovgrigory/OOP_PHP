<?php


class BlackBox
{
    private $data = [];

    public function addLog($message)
    {
        $this->data[] = $message;
    }

    public function getDataByEngineer(Engineer $engineer)
    {
        $engineer->decodeBox($this->data);
    }

}