<?php

use PHPUnit\Framework\TestCase;

class StrCmpTest extends TestCase
{
    public function testExample()
    {
        $str = "leo";
        $str2 = "leo";
        $v = strcmp($str, $str2);
        $this->assertEquals(0, $v);

        $str = "a";
        $str2 = "b";
        $v = strcmp($str, $str2);
        $this->assertEquals(-1, $v);

        $str = "b";
        $str2 = "a";
        $v = strcmp($str, $str2);
        $this->assertEquals(1, $v);
    }
}