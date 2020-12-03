<?php declare(strict_types=1);

namespace Tests\Creational;

use Patterns\Creational\Singleton;
use PHPUnit\Framework\TestCase;

final class SingletonTest extends TestCase 
{


    public function testThatObjectIsSingleton()
    {
        $first = Singleton::getInstance();
        $second = Singleton::getInstance();

        $this->assertSame($first, $second);

        $this->assertEquals(spl_object_id($first), spl_object_id($second));
    }

}