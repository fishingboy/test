<?php

use PHPUnit\Framework\TestCase;

class ReturnTypeTest extends TestCase
{
    public function test_1()
    {
        $obj = new AAA();
        $response = $obj->getAge();
        if (null === $response) {
            echo count($response);
            exit("cc");
        }
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";
    }
}

class AAA {

    public function getAge()
    {
        return null;
    }
}