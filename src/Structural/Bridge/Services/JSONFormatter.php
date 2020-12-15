<?php 

namespace Patterns\Structural\Bridge\Services;

class JSONFormatter implements FormatterInterface {

	public function format(string $message) {
		return json_encode(['message'=> $message]);
	}

}