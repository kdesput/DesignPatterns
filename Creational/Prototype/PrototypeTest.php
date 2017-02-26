<?php

namespace DesignPatterns\Creational\Prototype;

require_once("CarPrototype.php");
require_once("BMWPrototype.php");
require_once("AudiPrototype.php");


$audiPrototype = new AudiPrototype();
$bmwPrototype = new BMWPrototype();

//Audi A3
$car = clone $audiPrototype;
$car->setModel("A3");
echo $car->getManufacturer() . " " . $car->getModel() . "<br />";

//Audi A4
$car = clone $audiPrototype;
$car->setModel("A4");
echo $car->getManufacturer() . " " . $car->getModel() . "<br />";

//BMW E36
$car = clone $bmwPrototype;
$car->setModel("E36");
echo $car->getManufacturer() . " " . $car->getModel() . "<br />";

//BMW E46
$car = clone $bmwPrototype;
$car->setModel("E46");
echo $car->getManufacturer() . " " . $car->getModel() . "<br />";

?>