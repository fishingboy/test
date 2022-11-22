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
//        get_defined_vars();
        $b = get_mangled_object_vars($obj);
        echo "<pre>b = " . print_r($b, true) . "</pre>\n";
    }

    public function testVars3()
    {
        $obj = new TestVar();
        $vars = get_mangled_object_vars($obj);
        echo "<pre>vars = " . print_r($vars, true) . "</pre>\n";
        $this->assertEquals(["c" => 1111], $vars);

        $a = xdebug_get_declared_vars();
        echo "<pre>a = " . print_r($a, true) . "</pre>\n";
    }

    public function testVars4()
    {
        $r = new ReflectionMethod("TestVAr", "echoName");
        echo $r->getReturnType();
        echo "<pre>r = " . print_r($r, true) . "</pre>\n";
        $params = $r->getParameters();
        var_dump($params);
    }


}

class TestVar {
    private $a = 1;
    private $b = "cc";
    public $c = 1111;

    public function echoName($name) : string
    {
        return $name;
    }
}