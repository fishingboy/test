<?php

use PHPUnit\Framework\TestCase;

class OpTest extends TestCase
{
    public function test1()
    {
        $response = (1 + 1 > 0);
        $this->assertTrue($response);
    }

    public function test2()
    {
        $response = (1 + -1 > 0);
        $this->assertFalse($response);
    }
}