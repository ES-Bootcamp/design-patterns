<?php 

namespace Patterns\Structural\Decorator\Interfaces;

interface Notification {
	public function getMessage(): string;
	public function send(): string;
}