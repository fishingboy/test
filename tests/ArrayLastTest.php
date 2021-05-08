<?php

use PHPUnit\Framework\TestCase;

class ArrayLastTest extends TestCase
{
    public function testExample()
    {
        $arr = [1, 2, 3];
        // $response = array_last($arr);
        // 結論，原生 php 根本沒有 array_last 的 funciton
        $response = function_exists('array_last');
        $this->assertFalse($response);
    }
}