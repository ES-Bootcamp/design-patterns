<?php

require 'vendor/autoload.php';

use Patterns\Structural\Proxy\URLReader;
use Patterns\Structural\Proxy\ProxyURLReader;

$reader = new ProxyURLReader(new URLReader());
echo "<code>";
echo $reader->read('https://unsplash.com');
echo "</code>";