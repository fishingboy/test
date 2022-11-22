<?php

use PHPUnit\Framework\TestCase;

class DateTimeTest extends TestCase
{
    public function testExample()
    {
        $time = "2021-11-03 08:14:26(GMT+00:00)";
        $timer = new \DateTime($time);
        $this->assertTrue(True);
    }

    public function testExample2()
    {
        $time = "2021-11-03 08:14:26 GMT+00:00";
        $timer = new \DateTime($time);
        $this->assertTrue(True);

        echo $timer->getTimezone()->getName() . "\n";
    }

    public function testExample3()
    {
        $time = "2021-11-03 08:14:26 GMT+08:00";
        $timer = new \DateTime($time);
        $this->assertTrue(True);

        echo $timer->getTimezone()->getName() . "\n";
    }

    public function testExample4()
    {
        $time = "2021-11-03 08:14:26 GMT+00:00";
        $timer = new \DateTime($time);
        $this->assertTrue(True);

        echo $timer->getTimezone()->getName() . "\n";
        $diff = $timer->diff(new DateTime());
        var_dump($diff);
        var_dump($diff->i);
    }

    public function testExample5()
    {
        $time = "2021-11-03 17:40:26 GMT+08:00";
        $timer = new \DateTime($time);
        $this->assertTrue(True);

        echo $timer->getTimezone()->getName() . "\n";
        $diff = $timer->diff(new DateTime());
        var_dump($diff);
        var_dump($diff->i);
    }

    public function testExample6()
    {
        $timer = new \DateTime();
        $timezone = new DateTimeZone("Asia/Taipei");
        echo $timer->setTimezone($timezone)->format("Y-m-d H:i:s") . PHP_EOL;
        $timezone = new DateTimeZone("Asia/Tokyo");
        echo $timer->setTimezone($timezone)->format("Y-m-d H:i:s") . PHP_EOL;
    }

    public function testExample7()
    {
        $timezone = new DateTimeZone("Asia/Taipei");
        $now = (new \DateTime())->setTimezone($timezone)->format("Y-m-d H:i:s");
        echo "<pre>now = " . print_r($now, true) . "</pre>\n";
    }

    public function testExample8()
    {
        $now = (new \DateTime())->format("Y-m-d H:i:sO");
        echo "<pre>now = " . print_r($now, true) . "</pre>\n";
    }

    public function testExample9()
    {
        $time = "2021-11-03 08:14:26 GMT+00:00";
        $timer = new \DateTime($time);
        $response = $timer->modify("+5 years")->format("Y-m-d");
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";

    }
}
