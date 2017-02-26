<?php

namespace DesignPatterns\Creational\AbstractFactory;

require_once("AbstractFactory.php");
require_once("BMWFactory.php");
require_once("AudiFactory.php");
require_once("Car.php");
require_once("BMW.php");
require_once("Audi.php");

$factory = new BMWFactory();
$car = $factory->createCar("E46");
echo $car->getManufacturer() . " " . $car->getModel();
$car = $factory->createCar("E36");
echo $car->getManufacturer() . " " . $car->getModel();

$factory = new AudiFactory();
$car = $factory->createCar("A4");
echo $car->getManufacturer() . " " . $car->getModel();
$car = $factory->createCar("A3");
echo $car->getManufacturer() . " " . $car->getModel();

?>