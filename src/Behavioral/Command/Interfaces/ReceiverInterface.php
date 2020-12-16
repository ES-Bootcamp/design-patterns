<?php 

namespace Patterns\Behavioral\Command\Interfaces;

interface ReceiverInterface {
	public function volumeUp(): string;
	public function volumeDown(): string;
}
