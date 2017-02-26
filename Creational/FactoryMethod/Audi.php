<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Audi implements IDriveable
{
    public function drive() : string
    {
        return "Kle Kle Kle";
    }
}

?>