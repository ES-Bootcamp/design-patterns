<?php

namespace Patterns\Behavioral\Strategy;

use Patterns\Behavioral\Strategy\Concrete\ConcreteRendererInterface;

class Renderer {

	protected $renderer;

	public function __construct(ConcreteRendererInterface $renderer)
	{
		$this->renderer = $renderer;
	}
	public function output($string): string
	{
		return $this->renderer->render($string);
	}
}