<?php 

namespace Patterns\Structural\Bridge\Services;

interface FormatterInterface {
	public function format(string $message);
}