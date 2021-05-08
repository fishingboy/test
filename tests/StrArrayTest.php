<?php

use PHPUnit\Framework\TestCase;

class StrArrayTest extends TestCase
{
    public function testExample()
    {
        $str = "leo";
        $str[0] = strtoupper($str[0]);
        $this->assertEquals("Leo", $str);
    }
}