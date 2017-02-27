<?php

namespace DesignPatterns\Creational\Builder;


class AudiBuilder implements IBuilder
{
    private $audi;

    public function addEngine()
    {
        $this->audi->setPart('TDIEngine', new Engine());
    }

    public function addDrive()
    {
        $this->audi->setPart('Quattro', new Drive());
    }

    public function createCar()
    {
        $this->audi = new Audi();
    }

    public function getCar(): Car
    {
        return $this->audi;
    }
}

?>