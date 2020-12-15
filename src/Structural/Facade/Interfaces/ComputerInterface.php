<?php 

namespace Patterns\Structural\Facade\Interfaces;

interface ComputerInterface {
	public function signalBios();
	public function startBootLoader();
	public function loadSystem();
	public function login();

	public function shutdownSignal();
	public function killAllProcesses();
	public function killSystem();
	public function killElectricity();
}