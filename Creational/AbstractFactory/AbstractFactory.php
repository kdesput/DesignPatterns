<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createCar(string $model): Car;
}

?>