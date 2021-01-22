<?php


class FileWriter implements Writer
{
    public $fp;

    public function __construct($filename)
    {
        $this->fp = fopen($filename, 'w');
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function write(array $data)
    {
        foreach ($data as $item)
        {
            fwrite($this->fp, $item . PHP_EOL);
        }
    }
}