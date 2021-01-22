<?php


class UpperCaseConverter implements Converter
{
    public function convert($data)
    {
        $data[0] = strtoupper($data[0]);
        return $data;
    }
}