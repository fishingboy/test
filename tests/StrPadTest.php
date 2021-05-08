<?php

use PHPUnit\Framework\TestCase;

class StrPadTest extends TestCase
{
    public function testExample()
    {
        $response = str_pad("*", 3);
        $this->assertEquals("*  ", $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
    }

    public function testExample2()
    {
        $response = str_pad("", 3, "*");
        $this->assertEquals("***", $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
    }

    public function testExample3()
    {
        $response = str_pad("", 3, "**");
        $this->assertEquals("***", $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
    }

    public function testExample4()
    {
        $response = str_pad("", 3, "　");
        $this->assertNotEquals("　　　", $response);
        $response = str_pad(" ", 3, "a");
        $this->assertEquals(" aa", $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";

        // 本來以為 str_pad 是用 指定的字串去填滿，後來才發現是用字串是填滿不足的地方而以
    }
}