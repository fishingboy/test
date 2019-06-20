<?php

use PHPUnit\Framework\TestCase;

class AssertTest extends TestCase
{
    public function testAllAssertMethod()
    {
        $this->assertFalse(false);
        $this->assertIsArray([1]);
        $this->assertArrayHasKey('c', ['c' => 1]);
        $this->assertIsBool(true);
        $this->assertGreaterThan(1, 2);
        $this->assertTrue(true);
        $this->assertEquals(true, true);
        $this->assertIsString("abc");
        $this->assertNull(null);
        $this->assertIsInt(0);
        $this->assertIsObject(new stdClass());
        $this->assertCount(3, [1,2,3]);
        $this->assertArrayNotHasKey('cc', ['aa' => 1]);
        $this->assertContains(1, [1,2,3]);
        $this->assertContains("b", "abc");
        $this->assertNotEmpty(1);

        $obj = new stdClass();
        $obj->cc = true;
        $this->assertObjectHasAttribute('cc', $obj);

        $this->assertClassHasAttribute('speed', Car::class);

        $this->assertArraySubset(["a" => 1], ["a" => 1]);
        $this->assertClassHasStaticAttribute("width", Car::class);

        $this->assertClassNotHasAttribute('dd', Car::class);
        $this->assertClassNotHasStaticAttribute("height", Car::class);
        $this->assertContainsOnly("string", ["1", "2", "3"]);
        $this->assertContainsOnly("int", [2, 1, 3]);
    }
}

class Car
{
    private $speed = 60;
    private static $width = 200;
    const MAX_SPEED = 600;
    public static function getName() {}
}