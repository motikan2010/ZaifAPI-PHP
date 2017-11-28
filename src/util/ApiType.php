<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\ApiRequest;
use ZaifPHP\Lib\CommonConst;

class ApiType
{

    /**
     * @param $exchange
     * @return mixed
     */
    private static function sendRequest($exchange)
    {
        return ApiRequest::sendRequest(CommonConst::getApiType() .
            CommonConst::getApiExchange($exchange));
    }

    /**
     * @return mixed
     */
    public static function btcJpyJson()
    {
        return self::sendRequest(CommonConst::BTC_JPY);
    }

    /**
     * @return mixed
     */
    public static function xemJpyJson()
    {
        return self::sendRequest(CommonConst::XEM_JPY);
    }

    /**
     * @return mixed
     */
    public static function monaJpyJson()
    {
        return self::sendRequest(CommonConst::MONA_JPY);
    }

    /**
     * @return mixed
     */
    public static function monaBtcJson()
    {
        return self::sendRequest(CommonConst::MONA_BTC);
    }

}