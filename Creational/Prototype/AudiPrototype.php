<?php

namespace DesignPatterns\Creational\Prototype;

class AudiPrototype extends CarPrototype
{
    protected $manufacturer = 'Audi';

    public function __clone()
    {
    }
}

?>