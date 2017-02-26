<?php

namespace DesignPatterns\Creational\AbstractFactory;

class BMWFactory extends AbstractFactory
{
    public function createCar(string $model): Car
    {
        return new BMW($model);
    }
}

?>