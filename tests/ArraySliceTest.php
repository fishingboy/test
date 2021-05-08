<?php

use PHPUnit\Framework\TestCase;

class ArraySliceTest extends TestCase
{
    public function testExample()
    {
        $array = [1,2,3,4,5,6,7];
        $this->assertArraySubset([1,2,3,4], array_slice($array, 0, 4));
        $this->assertArraySubset([2,3], array_slice($array, 1, 2));
    }
}