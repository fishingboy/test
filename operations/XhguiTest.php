<?php

use PHPUnit\Framework\TestCase;

class XhguiTest extends TestCase
{
    public function testExample()
    {
        $str = "localhost/api/article/106560?api_token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1ODEyMjg1MTQsImV4cCI6MTU4MTQwMTMxNCwic3lzdGVtX25hbWUiOiJpcnMiLCJ6dXZpb19pZCI6IjE2NzE4MTUiLCJlbWFpbCI6ImFtYmVyMDk3MDE2NzI4NUBnbWFpbC5jb20iLCJuYW1lIjoiUVx1OGQ3N1x1NGY4NiIsIm5pY2tuYW1lIjoiXHU1NzA4XHU1NzA4IiwidW5pdmVyc2l0eV9pZCI6IjMzNCIsInVuaXZlcnNpdHlfbmFtZSI6Ilx1OWFkOFx1OTZjNFx1NTkyN1x1NWI3OCIsInNjaG9vbF9sZXZlbF9pZCI6IjEiLCJzdWJfZGVwYXJ0bWVudF9pZCI6IjIwMDIzIiwic3ViX2RlcGFydG1lbnRfbmFtZSI6Ilx1NGViYVx1NjU4N1x1NzkzZVx1NjcwM1x1NzlkMVx1NWI3OFx1OTY2MiIsImNvdW50eV9pZCI6IjIyIiwiY291bnR5X25hbWUiOiJcdTlhZDhcdTk2YzRcdTVlMDIiLCJncmFkZV9pZCI6IjIiLCJncmFkZV9uYW1lIjoiXHU1OTI3XHU0ZThjIiwiZm9ydW1fc2V4X2NvZGUiOiJGIiwidXNlcl9pZCI6IjcxMTQ3MCJ9.SFGyo-18oM7HGu8JMukp9GsPEym-5zi8nyn71yQStdY&user_id&device=android&hide_ad=no&sort=time&find_more_type=board";

        $simple_url = function ($url) {
            $url = explode("?", $url)[0];
            $tmp = explode("/", $url);

            foreach ($tmp as $i => $str) {
                if (preg_match("/^[0-9]+$/", $str)) {
                    $tmp[$i] = "{number}";
                }
            }

            return implode("/", $tmp);
        };

        $response = $simple_url($str);

        $this->assertEquals("localhost/api/article/{number}", $response);
    }

    public function test_replace_url()
    {
        $str = "localhost/api/article/106560";

        $replace_url = function ($url) {
            return preg_replace("/^(localhost)/", "", $url);
        };

        $response = $replace_url($str);

        $this->assertEquals("/api/article/106560", $response);
    }
}