<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\ReceiverInterface;

class Television implements ReceiverInterface{
	public function volumeUp(): string
	{
		return "Volume is up";
	}
	public function volumeDown(): string
	{
		return "Volume is down";
	}
}