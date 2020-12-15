<?php declare(strict_types=1);

namespace Tests\Structural;

use Patterns\Structural\Proxy\URLReader;
use Patterns\Structural\Proxy\ProxyURLReader;
use PHPUnit\Framework\TestCase;
final class ProxyTest extends TestCase {

	public function testThatProxyAndObjectAreEqual()
	{
		$url = "https://example.com";
		$reader = new URLReader();
		$proxyreader = new ProxyURLReader(new URLReader());
		$result_one = $reader->read($url);
		$result_two = $proxyreader->read($url);
		$this->assertEquals($result_one, $result_two);
	}
}