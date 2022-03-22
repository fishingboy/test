<?php

use PHPUnit\Framework\TestCase;

class DumpPrivateVars extends TestCase
{
    public function testVars()
    {
        $obj = new TestVar();
        $vars = get_class_vars(TestVar::class);
        echo "<pre>vars = " . print_r($vars, true) . "</pre>\n";
        $this->assertEquals(["c" => 1111], $vars);

    }
    public function testVars2()
    {
        $obj = new TestVar();
        $vars = get_object_vars($obj);
        echo "<pre>vars = " . print_r($vars, true) . "</pre>\n";
        $this->assertEquals(["c" => 1111], $vars);

    }
}

class TestVar {
    private $a = 1;
    private $b = "cc";
    public $c = 1111;
}