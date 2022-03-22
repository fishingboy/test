<?php

use PHPUnit\Framework\TestCase;

class PregMatchTest extends TestCase
{
    public function testUrlencode()
    {
        $str = "/**
         * aaaa
         */
         aaaaa
         sssss
         ddddd
         fffff";

        preg_match("/\/\*\*.*\*\//", $str, $matches);
        echo "<pre>matches = " . print_r($matches, true) . "</pre>\n";
    }

    public function test2()
    {
        $str = "/**
         * aaaa
         */
         aaaaa
         sssss
         ddddd
         fffff";

        $pos1 = strpos($str, "/**");
        $pos2 = strpos($str, "*/");
        echo "<pre>pos1 = " . print_r($pos1, true) . "</pre>\n";
        echo "<pre>pos2 = " . print_r($pos2, true) . "</pre>\n";

        $php_doc = substr($str, $pos1, $pos2 - $pos1 + 2);
        echo "<pre>php_doc = " . print_r($php_doc, true) . "</pre>\n";

    }
}