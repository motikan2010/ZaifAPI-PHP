<?php

namespace ZaifWrapper\Util;

use ZaifWrapper\Lib\ApiRequest;
use ZaifWrapper\Lib\CommonConst;

class PublicApi
{

    private $apiType = null;

    public function __construct($type)
    {
        $this->apiType = $type;
    }

    private function sendRequest($exchange)
    {
        return ApiRequest::sendRequest($this->apiType, $exchange);
    }

    /**
     * To JPY
     */

    public function btcJpy()
    {
        return $this->sendRequest(CommonConst::BTC_JPY);
    }

    public function xemJpy()
    {
        return $this->sendRequest(CommonConst::XEM_JPY);
    }

    public function monaJpy()
    {
        return $this->sendRequest(CommonConst::MONA_JPY);
    }

    public function ethJpy()
    {
        return $this->sendRequest(CommonConst::ETH_JPY);
    }

    public function bchJpy()
    {
        return $this->sendRequest(CommonConst::BCH_JPY);
    }

    /**
     * To BTC
     */

    public function xemBtc()
    {
        return $this->sendRequest(CommonConst::XEM_BTC);
    }

    public function monaBtc()
    {
        return $this->sendRequest(CommonConst::MONA_BTC);
    }

    public function ethBtc()
    {
        return $this->sendRequest(CommonConst::ETH_BTC);
    }

    public function bchBtc()
    {
        return $this->sendRequest(CommonConst::BCH_BTC);
    }

}