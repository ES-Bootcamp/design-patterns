<?php
namespace Patterns\Behavioral\Strategy\Concrete;

class HtmlRenderer implements ConcreteRendererInterface {
	
	public function render($input)
	{
		return htmlspecialchars($input);
	}
}