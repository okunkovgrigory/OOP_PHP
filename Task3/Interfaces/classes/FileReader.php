<?php


class FileReader implements Reader
{
    public $fp;

    public $data = [];

    public function __construct($filename)
    {
        $this->fp = fopen($filename, 'r');
    }

    public function __destruct()
    {
        fclose($this->fp);
    }

    public function read()
    {
        while (!feof($this->fp))
        {
            $this->data[] = trim(fgets($this->fp));
        }
        foreach ($this->data as $key=>$value)
        {
            if ($value === '') {
                unset($this->data[$key]);
            }
        }
        return $this->data;
    }
}