<?php declare(strict_types=1);

namespace Tests\Structural;

use Patterns\Structural\Adapter\StripeToBraintree;
use Patterns\Structural\Adapter\Braintree\PayWithBraintree;
use PHPUnit\Framework\TestCase;

final class AdapterTest extends TestCase {
	public function testThatAdapterWorks()
	{
		$adapter = new StripeToBraintree(new PayWithBraintree());
		$adapter->send(1000);
		$adapter->send(2000);
		$adapter->send(1500);
		
		$this->assertEquals($adapter->total(), 4500);
	}
}