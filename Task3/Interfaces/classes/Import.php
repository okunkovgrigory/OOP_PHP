<?php


class Import
{
    public $reader;
    public $writer;
    public $converters = [];

    public function from(Reader $reader)
    {
        $this->reader = $reader;
    }

    public function to(Writer $writer)
    {
        $this->writer = $writer;
    }

    public function with(Converter $converter)
    {
        $this->converters[] = $converter;
    }

    public function execute()
    {
        $data = $this->reader->read();
        foreach ($this->converters as $converter) {
            $this->writer->write($converter->convert($data));
        }
    }
}