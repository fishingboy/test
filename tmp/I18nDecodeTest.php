<?php

use PHPUnit\Framework\TestCase;

class i18nDecodeTest extends TestCase
{
    public function testExample()
    {
        $s = '{"Turn your NAS into a smart facial recognition solution.<br>\nThis complete solution is suitable for applications such as member identification management, door access control systems, and smart retail.":"\u304a\u4f7f\u3044\u306e NAS \u3092\u30b9\u30de\u30fc\u30c8\u9854\u8a8d\u8a3c\u30bd\u30ea\u30e5\u30fc\u30b7\u30e7\u30f3\u306b\u5909\u8eab\u3055\u305b\u307e\u3059\u3002<br>\n\u3053\u306e\u5b8c\u5168\u306a\u30bd\u30ea\u30e5\u30fc\u30b7\u30e7\u30f3\u306f\u3001\u30e1\u30f3\u30d0\u30fc\u8b58\u5225\u7ba1\u7406\u3001\u30c9\u30a2\u30a2\u30af\u30bb\u30b9\u30b3\u30f3\u30c8\u30ed\u30fc\u30eb\u30b7\u30b9\u30c6\u30e0\u3001\u30b9\u30de\u30fc\u30c8\u30ea\u30c6\u30fc\u30eb\u306a\u3069\u306e\u30a2\u30d7\u30ea\u30b1\u30fc\u30b7\u30e7\u30f3\u306b\u9069\u3057\u3066\u3044\u307e\u3059\u3002"}';
        $d = json_decode($s);
        var_dump($d);
        $this->assertTrue(true);
    }

    public function testExample2()
    {
        $s = '{"Turn your NAS into a smart facial recognition solution.":"\u304a\u4f7f\u3044\u306e NAS \u3092\u30b9\u30de\u30fc\u30c8\u9854\u8a8d\u8a3c\u30bd\u30ea\u30e5\u30fc\u30b7\u30e7\u30f3\u306b\u5909\u8eab\u3055\u305b\u307e\u3059\u3002"}';
        $d = json_decode($s);
        var_dump($d);
        $this->assertTrue(true);
    }
}