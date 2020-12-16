<?php

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\CommandInterface;

class RemoteControl {
	
	public function invoke(CommandInterface $command)
	{
		return $command->execute();
	}
}