<?php

namespace DesignPatterns\Creational\Builder;

require_once("Drive.php");
require_once("Engine.php");
require_once("Car.php");
require_once("Audi.php");
require_once("BMW.php");
require_once("IBuilder.php");
require_once("AudiBuilder.php");
require_once("BMWBuilder.php");
require_once("Creator.php");


//Let's build Audi
$audiBuilder = new AudiBuilder();
$newCar = (new Creator())->build($audiBuilder);
echo get_class($newCar) . "<br />";

//Let's build BMW
$bmwBuilder = new BMWBuilder();
$newCar = (new Creator())->build($bmwBuilder);
echo get_class($newCar) . "<br />";


?>