<?php

namespace DesignPatterns\Creational\Prototype;

abstract class CarPrototype
{
	protected $model;
	protected $manufacturer;

	public abstract function __clone();

	public function getModel() : string
	{
		return $this->model;
	}

	public function setModel(string $model)
	{
		$this->model = $model;
	}

	public function getManufacturer() : string
	{
		return $this->manufacturer;
	}
}

?>