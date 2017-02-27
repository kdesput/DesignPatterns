<?php

namespace DesignPatterns\Structural\Facade;

class DoorLock
{
    public function lock()
    {
        echo "Door locked!<br />";
    }

    public function unlock()
    {
        echo "Door unlocked!<br />";
    }
}

?>