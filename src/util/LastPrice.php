<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\ApiRequest;
use ZaifPHP\Lib\CommonConst;

class LastPrice extends ApiType
{
    /**
     * @param $exchange
     * @return mixed
     */
    private static function sendRequest($exchange)
    {
        return ApiRequest::sendRequest(CommonConst::getApiType(CommonConst::API_TYPE_LAST_PRICE) .
            CommonConst::getApiExchange($exchange));
    }

}