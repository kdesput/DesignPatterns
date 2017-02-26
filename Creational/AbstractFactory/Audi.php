<?php

namespace DesignPatterns\Creational\AbstractFactory;

class Audi extends Car
{
    public function __construct(string $model) 
	{
		parent::__construct($model);
		$this->manufacturer = "Audi";
	}
}

?>