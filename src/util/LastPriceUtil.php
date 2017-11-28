<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\ApiRequest;
use ZaifPHP\Lib\CommonConst;

class LastPriceUtil
{
    const API_TYPE = 'last_price';

    /**
     * @param $exchange
     * @return mixed
     */
    private static function sendRequest($exchange)
    {
        return ApiRequest::sendRequest(CommonConst::getApiType(self::API_TYPE) . CommonConst::getApiExchange($exchange));
    }

    /**
     * @return mixed
     */
    public static function btcJpy()
    {
        return self::sendRequest('btc_jpy');
    }

    /**
     * @return mixed
     */
    public static function xemJpy()
    {
        return self::sendRequest('xem_jpy');
    }

    /**
     * @return mixed
     */
    public static function monaJpy()
    {
        return self::sendRequest('mona_jpy');
    }

    /**
     * @return mixed
     */
    public static function monaBtc()
    {
        return self::sendRequest('mona_btc');
    }

}