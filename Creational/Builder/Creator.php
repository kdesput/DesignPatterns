<?php

namespace DesignPatterns\Creational\Builder;

class Creator
{
    public function build(IBuilder $builder): Car
    {
        $builder->createCar();
        $builder->addEngine();
        $builder->addDrive();

        return $builder->getCar();
    }
}