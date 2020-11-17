<?php

use Libraries\CurlParser;
use PHPUnit\Framework\TestCase;

/**
 * @property Libraries\CurlParser  parser
 */
class CurlParserTest extends TestCase
{
    private $parser;

    public function setUp()
    {
        $curl_string = "curl 'https://sample.com/api/test' -H 'origin: https://qt.zuvio.com.tw' -H 'accept-encoding: gzip, deflate, br' -H 'accept-language: zh-TW,zh;q=0.9,en-US;q=0.8,en;q=0.7,ja;q=0.6,zh-CN;q=0.5' -H 'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36' -H 'content-type: application/x-www-form-urlencoded; charset=UTF-8' -H 'accept: application/json, text/javascript, */*; q=0.01' -H 'referer: https://qt.zuvio.com.tw/student5/chat/message/70' -H 'authority: sample.com' --data 'user_id=1381&channel_id=70&action=cancel' --compressed";
        $this->parser = new CurlParser($curl_string);
        $this->parser->getAll();
    }

    public function testResponse()
    {
        $curl = $this->parser->getAll();
        $this->assertArrayHasKey('api_url', $curl);
        $this->assertArrayHasKey('api_url', $curl);
        $this->assertEquals('https://sample.com/api/test', $curl['api_url']);
        $this->assertArrayHasKey('channel_id', $curl['params']);
        $this->assertEquals(70, $curl['params']['channel_id']);
        $this->assertEquals('cancel', $curl['params']['action']);
//        $this->assertArrayHasKey('method', $curl);
//        echo "<pre>data = " . print_r($curl, true) . "</pre>\n";
        var_export($curl);
    }
}

