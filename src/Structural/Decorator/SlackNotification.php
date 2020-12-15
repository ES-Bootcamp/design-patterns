<?php 

namespace Patterns\Structural\Decorator;

use Patterns\Structural\Decorator\Interfaces\Notification;

class SlackNotification implements Notification {

	protected $notification;
	
	public function __construct(Notification $notification)
	{
		$this->notification = $notification;
	}

	public function setMessage(string $message): void
	{
		$this->notification->setMessage($message);
	}
	public function getMessage(): string
	{
		return $this->notification->getMessage() . " to slack";
	}

	public function send(): string
	{
		return $this->notification->send() . " via slack";
	}
}