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
}
