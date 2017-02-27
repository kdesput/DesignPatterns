<?php

namespace DesignPatterns\Structural\Adapter;

class TeslaAdapter implements ICar
{
	private $tesla;

	public function __construct(Tesla $tesla)
	{
        $this->tesla = $tesla;
	}

	public function refuel()
	{
		$this->tesla->charge();
	}
}

?>