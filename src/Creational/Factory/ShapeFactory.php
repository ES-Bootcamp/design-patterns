<?php 

namespace Patterns\Creational\Factory;
use Patterns\Creational\Factory\Shapes\Circle;
use Patterns\Creational\Factory\Shapes\Rectangle;
use Patterns\Creational\Factory\Shapes\Triangle;
use Patterns\Creational\Factory\Interfaces\ShapeInterface;

class ShapeFactory {

	public static function build($shape)
	{
		switch($shape){
			case 'circle':
				return new Circle();
			break;
			case 'rectangle':
				return new Rectangle();
			break;
			case 'triangle':
				return new Triangle();
			break;
			default:
				throw new \App\Exceptions\ShapeUnknownException('Shape cannot be recognized');
		}
	}
}