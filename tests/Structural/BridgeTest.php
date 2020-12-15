<?php declare(strict_types=1);

namespace Tests\Structural;

use Patterns\Structural\Bridge\Formatter;
use Patterns\Structural\Bridge\Services\JSONFormatter;
use Patterns\Structural\Bridge\Services\HTMLFormatter;
use PHPUnit\Framework\TestCase;

final class BridgeTest extends TestCase {
	
	public function testThatBridgeToJSONFormatterIsEstablished()
	{
		$formatter = new Formatter(new JSONFormatter());
		$formatter->setMessage('Hello, world');
		$this->assertEquals('{"message":"Hello, world"}', $formatter->getMessage());
	}

	public function testThatBridgeToHTMLFormatterIsEstablished()
	{
		$formatter = new Formatter(new HTMLFormatter());
		$formatter->setMessage('Hello, world');
		$this->assertEquals('<h1>Hello, world</h1>', $formatter->getMessage());
	}
}