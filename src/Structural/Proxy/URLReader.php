<?php 

namespace Patterns\Structural\Proxy;

use Patterns\Structural\Proxy\Interfaces\ReaderInterface;

class URLReader implements ReaderInterface {
	public function read(string $url)
	{
		return file_get_contents($url);
	}
}