<?php

namespace DesignPatterns\Creational\FactoryMethod;

class Volkswagen implements IDriveable
{
    public function drive() : string
    {
        return "Kle Kle Kle";
    }
}

?>