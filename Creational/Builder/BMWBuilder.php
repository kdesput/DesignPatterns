<?php

namespace DesignPatterns\Creational\Builder;


class BMWBuilder implements IBuilder
{
    private $bmw;

    public function addEngine()
    {
        $this->bmw->setPart('V6Engine', new Engine());
    }

    public function addDrive()
    {
        $this->bmw->setPart('RWD', new Drive());
    }

    public function createCar()
    {
        $this->bmw = new BMW();
    }

    public function getCar(): Car
    {
        return $this->bmw;
    }
}

?>