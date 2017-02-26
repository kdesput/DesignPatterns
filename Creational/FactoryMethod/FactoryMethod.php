<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryMethod
{
    abstract protected function createCar(bool $premium): IDriveable;

    public function create(bool $premium): IDriveable
    {
        $obj = $this->createCar($premium);
        return $obj;
    }
}

?>