<?php

namespace DesignPatterns\Creational\FactoryMethod;

require_once("IDriveable.php");
require_once("FactoryMethod.php");
require_once("BMW.php");
require_once("Mini.php");
require_once("Volkswagen.php");
require_once("Audi.php");
require_once("BMWFactory.php");
require_once("VolkswagenFactory.php");

//BMW Factory
$factory = new BMWFactory();
$car = $factory->create(true);
echo "BMW Factory premium: " . $car->drive() . "<br />";
$car = $factory->create(false);
echo "BMW Factory not premium: " . $car->drive() . "<br />";

//Volkswagen factory
$factory = new VolkswagenFactory();
$car = $factory->create(true);
echo "Volkswagen Factory premium: " . $car->drive() . "<br />";
$car = $factory->create(false);
echo "Volkswagen Factory not premium: " . $car->drive() . "<br />";

?>