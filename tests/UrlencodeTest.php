<?php

use PHPUnit\Framework\TestCase;

class UrlencodeTest extends TestCase
{
    public function testUrlencode()
    {
        $str = "TS-251+-8G";
        $response = urlencode($str);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
        $response = rawurlencode($str);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";

    }

    public function testUrlencodeSpace()
    {
        $str = " ";
        $response = urlencode($str);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
        $response = rawurlencode($str);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
    }
}