<?php

use PHPUnit\Framework\TestCase;

class TmpfileTest extends TestCase
{
    public function test_tmpfile()
    {
        $file = tmpfile();
        echo "<pre>file = " . print_r($file, true) . "</pre>\n";

        // 取出路徑
        $path = stream_get_meta_data($file)['uri'];
        echo "<pre>path = " . print_r($path, true) . "</pre>\n";
        $this->assertIsString($path);

        // 建立的檔案會存在
        $this->assertFileExists($path);

        // fclose  之後就會被刪除
        fclose($file);
        $this->assertFileNotExists($path);
    }
}