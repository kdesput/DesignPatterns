<?php

namespace DesignPatterns\Creational\FactoryMethod;

class BMWFactory extends FactoryMethod
{
    public function createCar(bool $premium): IDriveable
    {
        if($premium) return new BMW();
        else return new Mini();
    }
}

?>