<?php

namespace DesignPatterns\Structural\Facade;

class Facade 
{
	private $alarm;
	private $doorLock;

	public function __construct(Alarm $alarm, DoorLock $doorLock)
	{
        $this->alarm = $alarm;
        $this->doorLock = $doorLock;
	}

	public function openCar()
	{
		$this->alarm->turnOff();
		$this->doorLock->unlock();
	}

	public function closeCar()
	{
        $this->doorLock->lock();
        $this->alarm->turnOn();
	}
}

?>