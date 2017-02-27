<?php

namespace DesignPatterns\Creational\Builder;

abstract class Car
{

    private $parts = [];

    public function setPart($key, $value)
    {
        $this->parts[$key] = $value;
    }
}

?>