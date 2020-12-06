<?php declare(strict_types=1);

namespace Tests\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\Builder\MySQLQuery;

final class BuilderTest extends TestCase {

	public function testThatBuilderWorks()
	{
		$builder = new MySQLQuery();
		$query = $builder->select('products', ['name', 'price'])
		->limit(5, 10)
		->get();

		$this->assertEquals($query, "SELECT name, price FROM products LIMIT 5, 10");
	}

}