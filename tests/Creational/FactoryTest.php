<?php declare(strict_types=1);

namespace Tests\Creational;

use Patterns\Creational\Factory\ShapeFactory;
use Patterns\Creational\Factory\shapes\Circle;
use Patterns\Creational\Factory\shapes\Rectangle;
use Patterns\Creational\Factory\shapes\Triangle;
use App\Exceptions\ShapeUnknownException;
use PHPUnit\Framework\TestCase;

final class FactoryTest extends TestCase {
	
	public function testThatFactoryIsWorking()
	{
		$circle = ShapeFactory::build('circle');
		$this->assertInstanceOf(Circle::class, $circle);
	}

	public function testThatShapeUnknownExceptionIsThrown()
	{
		$this->expectException(ShapeUnknownException::class);
		$star = ShapeFactory::build('star');
		$star->draw();
	}
}