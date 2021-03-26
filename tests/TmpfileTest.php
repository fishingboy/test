<?php

use PHPUnit\Framework\TestCase;

class TmpfileTest extends TestCase
{
    public function test_tmpfile()
    {
        $file = tmpfile();
        echo "<pre>file = " . print_r($file, true) . "</pre>\n";
        $path = stream_get_meta_data($file)['uri'];
        echo "<pre>path = " . print_r($path, true) . "</pre>\n";
        $this->assertIsString($path);
    }
}