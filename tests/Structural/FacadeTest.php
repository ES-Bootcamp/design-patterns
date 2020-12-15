<?php declare(strict_types=1);

namespace Tests\Structural;

use Patterns\Structural\Facade\ComputerFacade;
use Patterns\Structural\Facade\Computer;
use PHPUnit\Framework\TestCase;

final class FacadeTest extends TestCase {
	public function testThatComputerIsTurningOn()
	{
		$computer = new ComputerFacade(new Computer());

		$this->assertEquals("Bienvenue, Ilyes", $computer->turnOn());
	}

	public function testThatComputerIsShuttingDown()
	{
		$computer = new ComputerFacade(new Computer());
		$this->assertEquals("Computer is OFF", $computer->shutdown()); 
	}
}