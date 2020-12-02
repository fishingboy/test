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
        $this->assertEquals("　　　", $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
    }
}