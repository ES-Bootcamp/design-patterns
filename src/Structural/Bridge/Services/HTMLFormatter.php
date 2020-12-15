<?php 

namespace Patterns\Structural\Bridge\Services;

class HTMLFormatter implements FormatterInterface {

	public function format(string $message) {
		return sprintf("<h1>%s</h1>", $message);
	}

}