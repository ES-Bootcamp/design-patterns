<?php declare(strict_types=1);

use Patterns\Behavioral\Command\Television;
use Patterns\Behavioral\Command\RemoteControl;
use Patterns\Behavioral\Command\IncreaseVolume;
use Patterns\Behavioral\Command\DecreaseVolume;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase {

	public $tv;
	public $up;
	public $down;
	public $remote;
	public function setUp(): void
	{
		$this->tv = new Television();
		$this->up = new IncreaseVolume($this->tv); // command
		$this->down = new DecreaseVolume($this->tv); //command
		$this->remote = new RemoteControl();
		parent::setUp();
	}

	public function testThatVolumeIncreases()
	{
		$this->assertEquals('Volume is up', $this->remote->invoke($this->up));
	}

	public function testThatVolumeDecreases()
	{
		$this->assertEquals('Volume is down', $this->remote->invoke($this->down));
	}
}