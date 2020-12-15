<?php 

namespace Patterns\Structural\Decorator;
use Patterns\Structural\Decorator\Interfaces\Notification;

class SimpleNotification implements Notification {

	protected $message;

	public function setMessage(string $message): void
	{
		$this->message = $message;
	}
	public function getMessage(): string
	{
		return $this->message;
	}

	public function send(): string
	{
		return "Message sent";
	}
}