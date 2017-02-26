<?php

namespace DesignPatterns\Creational\AbstractFactory;

class BMW extends Car
{
    public function __construct(string $model) 
	{
		parent::__construct($model);
		$this->manufacturer = "BMW";
	}
}

?>