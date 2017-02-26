<?php

namespace DesignPatterns\Creational\FactoryMethod;

class VolkswagenFactory extends FactoryMethod
{
    public function createCar(bool $premium): IDriveable
    {
        if($premium) return new Audi();
        else return new Volkswagen();
    }
}

?>