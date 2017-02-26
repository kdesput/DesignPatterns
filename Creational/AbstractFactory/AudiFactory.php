<?php

namespace DesignPatterns\Creational\AbstractFactory;

class AudiFactory extends AbstractFactory
{
    public function createCar(string $model): Car
    {
        return new Audi($model);
    }
}

?>