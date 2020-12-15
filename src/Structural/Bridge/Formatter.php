<?php 

namespace Patterns\Structural\Bridge;

use Patterns\Structural\Bridge\Services\FormatterInterface;

class Formatter {

	protected $message;
	protected $formatter;

	public function __construct(FormatterInterface $formatter)
	{
		$this->formatter = $formatter;
	}
	public function setMessage(string $message): void
	{
		$this->message = $message;
	}
	public function getMessage(): string
	{
		return $this->formatter->format($this->message);
	}
}