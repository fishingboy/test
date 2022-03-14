<?php

use PHPUnit\Framework\TestCase;

class ArrayMapTest extends TestCase
{
    public function testExample()
    {
        $arr = [
            ["name" => "leo", "age" => 18],
            ["name" => "lay", "age" => 18],
            ["name" => "mou", "age" => 18],
        ];

        $response = array_map(function ($item) {
            return [
                "name" => $item['name']
            ];
        }, $arr);

        echo "<pre>response = " . print_r($response, true) . "</pre>\n";

        $this->assertEquals([
            ["name" => "leo"],
            ["name" => "lay"],
            ["name" => "mou"],
        ], $response);
    }
}