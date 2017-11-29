<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\ApiRequest;
use ZaifPHP\Lib\CommonConst;

class Trade
{

    private $key = null;
    private $secret = null;
    private $nonce = null;

    public function __construct($apiKey, $apiSecret)
    {
        $this->key = $apiKey;
        $this->secret = $apiSecret;
        $this->nonce = time();
    }

    public function info(){
        return $this->execute(CommonConst::TRADE_GET_INFO);
    }

    private function execute($method){
        $postData = [
            "nonce" => $this->nonce++,
            "method" => $method,
        ];

        $postDataQuery = http_build_query($postData);
        $sign = hash_hmac('sha512', $postDataQuery, $this->secret);
        $header = ["sign: {$sign}", "key: {$this->key}"];
        $data = ApiRequest::sendTradeRequest($header, $postDataQuery);
        return json_decode($data);
    }

}