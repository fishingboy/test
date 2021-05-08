<?php

use PHPUnit\Framework\TestCase;

class DataObjectTest extends TestCase
{
    public function testExample()
    {
        $d = new Data();
//        echo "<pre>d = " . json_encode($d, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "</pre>";
        echo $d;
    }
}

class Data
{
    public $num = 1;
    public $str = "hello world!";
    public $ids = [1,2,3];
    public $obj;

    public function __toString()
    {
        return json_encode($this);
    }

    public function aa()
    {
        $response = $this->api_lib->format($data, "{
            id:'int',
            str:'string',
            ids:[
                int
            ]
        }");

    }

    public function __get()
    {

    }
}