<?php
namespace Libraries;

/**
 * curl 指令解析器
 * @package Libraries
 */
class CurlParser
{
    private $cmd;
    private $api_url;
    private $params;

    public function __construct($cmd)
    {
        $this->cmd = $cmd;
    }

    public function parse()
    {
        $tmp = explode(" ", $this->cmd);

        for ($i = 0; $i < count($tmp); $i++) {
            $key = $tmp[$i];
            switch ($key) {
                case "curl":
                    $this->api_url = str_replace("'", "", $tmp[$i + 1]);
                    $i++;
                    break;
                case "--data":
                    $params = str_replace("'", "", $tmp[$i + 1]);
                    $this->params = $this->parseParams($params) ;
                    $i++;
                    break;
            }
        }
    }

    public function getAll()
    {
        $this->parse();

        return [
            'api_url' => $this->api_url,
            'params' => $this->params,
        ];
    }

    private function parseParams($param)
    {
        $fields = explode("&", $param);
        $params = [];
        foreach ($fields as $field) {
            $tmp = explode("=", $field);
            $params[$tmp[0]] = $tmp[1];
        }

        return $params;
    }
}