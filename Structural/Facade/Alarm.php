<?php

namespace DesignPatterns\Structural\Facade;

class Alarm 
{
    public function turnOn()
    {
        echo "Alarm is on!<br />";
    }

    public function turnOff()
    {
        echo "Alarm is off!<br />";
    }
}

?>