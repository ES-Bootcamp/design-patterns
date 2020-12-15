<?php 

namespace Patterns\Structural\Facade;
use Patterns\Structural\Facade\Interfaces\ComputerInterface;

final class Computer implements ComputerInterface {
	public function signalBios()
	{
		// 
		return $this;
	}
	public function startBootLoader()
	{
		//
		return $this;
	}
	public function loadSystem()
	{
		//
		return $this;
	}
	public function login()
	{
		//
		return "Bienvenue, Ilyes";
	}

	public function shutdownSignal()
	{
		return $this;
	}
	public function killAllProcesses()
	{
		return $this;
	}
	public function killSystem()
	{
		return $this;
	}
	public function killElectricity()
	{
		return "Computer is OFF";
	}


}