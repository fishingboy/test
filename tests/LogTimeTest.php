<?php

use PHPUnit\Framework\TestCase;

class LogTimeTest extends TestCase
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

    public function testMatch1()
    {
        $str = "[2022-05-29 06:11:07] main.INFO: Cron Job ";
        preg_match("/^\[([0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2})\]/", $str, $matches);
        echo "<pre>matches = " . print_r($matches, true) . "</pre>\n";

        $timer = new DateTime($matches[1]);
        echo $timer->format("c");

        $str = preg_replace("/^\[([0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2})\]/", "[" . $timer->format("c"). "]", $str);
        echo "<pre>str = " . print_r($str, true) . "</pre>\n";
    }

    public function testMatch2()
    {
        $str = "2022-05-29T06:11:17+00:00 INFO (6): Qnap\Catalog\Observer\ManageStockObserver:";
        preg_match("/^([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/", $str, $matches);
        echo "<pre>matches = " . print_r($matches, true) . "</pre>\n";

        $timer = new DateTime($matches[1]);
        echo $timer->format("c");

        $str = preg_replace("/^([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/", "[" . $timer->format("c"). "]", $str);
        echo "<pre>str = " . print_r($str, true) . "</pre>\n";
    }

    public function test_reformat_time()
    {
        $str = "[2022-05-29 06:11:07] main.INFO: Cron Job ";
        echo "<pre>str = " . print_r($str, true) . "</pre>\n";
        $response = reformat_time($str);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";

        $this->assertEquals("[2022-05-29T06:11:07+00:00] main.INFO: Cron Job ", $response);
    }

    public function test_reformat_time2()
    {
        $str = "2022-05-29T06:11:17+00:00 INFO (6): Qnap\Catalog\Observer\ManageStockObserver:";
        echo "<pre>str = " . print_r($str, true) . "</pre>\n";
        $response = reformat_time($str);
        echo "<pre>response = " . print_r($response, true) . "</pre>\n";

        $this->assertEquals("[2022-05-29T06:11:17+00:00] INFO (6): Qnap\Catalog\Observer\ManageStockObserver:", $response);
    }
}

function reformat_time($str) {
    $patterns = [
        "/^\[([0-9]{4}-[0-9]{2}-[0-9]{2} [0-9]{2}:[0-9]{2}:[0-9]{2})\]/",
        "/^([0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}:[0-9]{2}\+[0-9]{2}:[0-9]{2})/"
    ];

    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $str, $matches)) {
            $timer = new DateTime($matches[1]);
            $str = preg_replace($pattern, "[" . $timer->format("c"). "]", $str);
            break;
        }
    }

    return $str;
}
