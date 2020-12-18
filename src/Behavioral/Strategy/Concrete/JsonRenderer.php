<?php
namespace Patterns\Behavioral\Strategy\Concrete;

class JsonRenderer implements ConcreteRendererInterface {
	
	public function render($input)
	{
		return json_encode(['message' => $input]);
	}
}