<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder;

interface IBuilder
{
    public function createCar();

    public function addEngine();

    public function addDrive();

    public function getCar(): Car;
}

?>