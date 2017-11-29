<?php

namespace ZaifPHP\Util;


use ZaifPHP\Lib\ApiRequest;
use ZaifPHP\Lib\CommonConst;

class RequestCreator
{

    private $apiType = null;

    /**
     * RequestCreator constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->apiType = $type;
    }

    /**
     * @param $exchange
     * @return mixed
     */
    private function sendRequest($exchange)
    {
        return ApiRequest::sendRequest(CommonConst::getApiType($this->apiType) .
            CommonConst::getApiExchange($exchange));
    }

    /**
     * @return mixed
     */
    public function btcJpyJson()
    {
        return $this->sendRequest(CommonConst::BTC_JPY);
    }

    /**
     * @return mixed
     */
    public function xemJpyJson()
    {
        return $this->sendRequest(CommonConst::XEM_JPY);
    }

    /**
     * @return mixed
     */
    public function monaJpyJson()
    {
        return $this->sendRequest(CommonConst::MONA_JPY);
    }

    /**
     * @return mixed
     */
    public function monaBtcJson()
    {
        return $this->sendRequest(CommonConst::MONA_BTC);
    }

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