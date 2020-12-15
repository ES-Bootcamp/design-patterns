<?php 

namespace Patterns\Structural\Proxy\Interfaces;

interface ReaderInterface {
	public function read(string $url);
}