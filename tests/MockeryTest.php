<?php

use PHPUnit\Framework\TestCase;
use TestClasses\Car;

class MockeryTest extends TestCase
{
    public function testExample()
    {
        $mock = Mockery::mock(Car::class);
        $mock->shouldReceive('getWidth')->andReturn(200);

        $response = $mock->getWidth();
        $this->assertEquals(200, $response);
    }

    public function testExample2()
    {
        $car = new Car();
        $mock = Mockery::mock($car);
        $mock->shouldReceive('getWidth')->andReturn(200);
        $this->assertEquals(200, $mock->getWidth());
        $this->assertEquals(200, $mock->getHeight());

        // getSize() 內部在呼叫 getWidth() 時並沒有吃到 mock 的值
        $this->assertNotEquals(40000, $mock->getSize());
    }

    public function test_Stub()
    {
        $stub = $this->createStub(Car::class);
        $stub->method('getWidth')->willReturn(200);

        $this->assertEquals(200, $stub->getWidth());
        $this->assertNotEquals(200, $stub->getHeight());
    }

    // 終於找到了，可以部份 mock
    public function test_PartialMock()
    {
        //
        $stub = $this->createPartialMock(Car::class, ['getWidth']);
        $stub->method('getWidth')->willReturn(200);

        $this->assertEquals(200, $stub->getWidth());
        $this->assertEquals(200, $stub->getHeight());
        $this->assertEquals(40000, $stub->getSize());
    }
}

