<?php 

namespace Patterns\Behavioral\Command;

use Patterns\Behavioral\Command\Interfaces\CommandInterface;
use Patterns\Behavioral\Command\Interfaces\ReceiverInterface;

class IncreaseVolume implements CommandInterface {

	protected $receiver;

	public function __construct($receiver)
	{
		$this->receiver = $receiver;
	}

	public function execute(): string
	{
		return $this->receiver->volumeUp();
	}
}