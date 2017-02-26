<?php

namespace DesignPatterns\Creational\AbstractFactory;

abstract class Car
{
	private $model;
	protected $manufacturer;

	public function __construct(string $model) 
	{
		$this->model = $model;
	}

	public function getModel() : string
	{
		return $this->model;
	}

	public function getManufacturer() : string
	{
		return $this->manufacturer;
	}
}

?>