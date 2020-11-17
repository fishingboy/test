<?php

use PHPUnit\Framework\TestCase;

class BasenameTest extends TestCase
{
    public function testExample()
    {
        $this->assertEquals("M_E25A06.png", basename("https://s3.hicloud.net.tw/forum.public/public/system/icon/M_E25A06.png"));
        $this->assertEquals("M_E25A.06.png", basename("https://s3.hicloud.net.tw/forum.public/public/system/icon/M_E25A.06.png"));
    }
}