<?php 

namespace Patterns\Behavioral\Command\Interfaces;

use Patterns\Behavioral\Command\Interfaces\ReceiverInterface;

interface CommandInterface {
	public function execute(): string;
}