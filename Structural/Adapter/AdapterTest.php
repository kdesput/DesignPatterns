<?php

namespace DesignPatterns\Structural\Adapter;

require_once("Tesla.php");
require_once("ICar.php");
require_once("TeslaAdapter.php");

$tesla = new Tesla();
$adapter = new TeslaAdapter($tesla);

//Let's refuel our Tesla
$adapter->refuel();

?>