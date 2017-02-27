<?php

namespace DesignPatterns\Structural\Facade;

require_once("Alarm.php");
require_once("DoorLock.php");
require_once("Facade.php");

$alarm = new Alarm();
$doorLock = new DoorLock();
$facade = new Facade($alarm, $doorLock);

$facade->openCar();
$facade->closeCar();

?>