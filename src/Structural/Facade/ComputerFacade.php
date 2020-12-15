<?php

namespace Patterns\Structural\Facade;

use Patterns\Structural\Facade\Interfaces\ComputerInterface;

final class ComputerFacade {

	protected $computer;
	
	public function __construct(ComputerInterface $computer)
	{
		$this->computer = $computer;
	}
	
	public function turnOn()
	{
		return $this->computer
			->signalBios()
			->startBootLoader()
			->loadSystem()
			->login();
	}

	public function shutdown()
	{
		return $this->computer
			->shutdownSignal()
			->killAllProcesses()
			->killSystem()
			->killElectricity();
	}
}