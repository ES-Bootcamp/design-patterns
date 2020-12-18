<?php declare(strict_types=1);

use Patterns\Behavioral\Strategy\Renderer;
use Patterns\Behavioral\Strategy\Concrete\JsonRenderer;
use Patterns\Behavioral\Strategy\Concrete\HtmlRenderer;
use PHPUnit\Framework\TestCase;

final class StrategyTest extends TestCase {
	public function testThatJsonStrategyWorks()
	{
		$renderer = new Renderer(new JsonRenderer());
		$this->assertJson($renderer->output("Hello, world"));
	}

	public function testThatHtmlStrategyWorks()
	{
		$renderer = new Renderer(new HtmlRenderer());
		$this->assertEquals(
			"&lt;h1&gt;Hello, world&lt;/h1&gt;", 
			$renderer->output("<h1>Hello, world</h1>"));
	}
}