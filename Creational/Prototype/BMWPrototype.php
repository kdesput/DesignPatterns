<?php

namespace DesignPatterns\Creational\Prototype;

class BMWPrototype extends CarPrototype
{
    protected $manufacturer = 'BMW';

    public function __clone()
    {
    }
}

?>