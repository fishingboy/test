<?php

use PHPUnit\Framework\TestCase;

class ParseStrTest extends TestCase
{
    public function test_1()
    {
        $str = "a=1";
        parse_str($str, $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
        $this->assertEquals(["a" => 1], $response);
    }

    public function test_2()
    {
        $str = "index.php?a='1&b=<script>aaa<script>&c='123";
        $response = preg_replace("/['\"<>']+/", "", $str);
//        parse_str($str, $response);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
        $this->assertEquals(["a" => 1], $response);
    }
}