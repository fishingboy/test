<?php

use PHPUnit\Framework\TestCase;

class Http_build_queryTest extends TestCase
{
    public function test_1()
    {
        $state_params = [];
        $state_params["sku"] = 'AAA-123';
        $state_params["qty"] = 1;
        $state = http_build_query($state_params);
        echo "<pre>state = " . print_r($state, true) . "</pre>\n";

//        $this->assertEquals(["a" => 1], $response);
    }

    public function test_2()
    {
        $str = "";
    }
}