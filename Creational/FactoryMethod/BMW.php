<?php

namespace DesignPatterns\Creational\FactoryMethod;

class BMW implements IDriveable
{
    public function drive() : string
    {
        return "Wrrrruuuum";
    }
}

?>