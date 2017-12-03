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
        return ApiRequest::sendRequest($this->apiType . $exchange);
    }

    /**
     * JSON形式で取得
     */

    public function btcJpyJson()
    {
        return $this->sendRequest(CommonConst::BTC_JPY);
    }

    public function xemJpyJson()
    {
        return $this->sendRequest(CommonConst::XEM_JPY);
    }

    public function monaJpyJson()
    {
        return $this->sendRequest(CommonConst::MONA_JPY);
    }

    public function monaBtcJson()
    {
        return $this->sendRequest(CommonConst::MONA_BTC);
    }

    /**
     * 配列形式で取得
     */

    public function btcJpyArray()
    {
        $resJson = $this->btcJpyJson();
        return json_decode($resJson, true);
    }

    public function xemJpyArray()
    {
        $resJson = $this->xemJpyJson();
        return json_decode($resJson, true);
    }

    public function monaJpyArray()
    {
        $resJson = $this->monaJpyJson();
        return json_decode($resJson, true);
    }

    public function monaBtcArray()
    {
        $resJson = $this->monaBtcJson();
        return json_decode($resJson, true);
    }

}