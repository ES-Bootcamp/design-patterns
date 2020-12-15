<?php 

namespace Patterns\Structural\Proxy;

use Patterns\Structural\Proxy\Interfaces\ReaderInterface;

class ProxyURLReader implements ReaderInterface {

	private $reader;
	private $cache = [];
	public function __construct(ReaderInterface $reader)
	{
		$this->reader = $reader;
	}

	public function read(string $url)
	{
		if(!isset($this->cache[$url])){
			$this->cache[$url]["content"] =  $this->reader->read($url);
			$this->cache[$url]["time"] = time();
		}
		return $this->cache[$url];
	}
}