<?php 

require 'vendor/autoload.php';

use Patterns\Creational\Factory\ShapeFactory;

$triangle = ShapeFactory::build('rectangle');

$triangle->draw();