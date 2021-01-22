<?php


class Forge
{
    public function burn($object)
    {
        $flame = $object->burn();
        echo $flame->render($object);
    }
}