<?php

use PHPUnit\Framework\TestCase;

class StockTest extends TestCase
{
    public function test()
    {
        $stock = new Stock();
        $month_income = 8000;
        $percent = 6;
        $stock->calc($month_income, $percent);
    }
}

class Stock
{

    public function calc(int $month_income, int $percent)
    {
        $year = $month_income * 12;
        $total = $cost = 0;
        for ($i=1; $i<=40; $i++) {
            $dividend = $total * $percent / 100;
            $total += $year + $dividend;
            $cost += $year;
            $this->display($i, $total, $dividend, $cost);
        }
    }

    public function display($i, $total, $dividend, $cost)
    {
        if ($i == 1) {
            echo "| 年 | 總值 | 股利 | 成本 | 平均月股利 |\n";
        }
        $month_avg = number_format($dividend / 12);
        $total = number_format($total);
        $dividend = number_format($dividend);
        $cost = number_format($cost);
        echo "| $i | $total | $dividend | $cost | $month_avg |\n";
    }
}