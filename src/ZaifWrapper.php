<?php

namespace ZaifWrapper;

use ZaifWrapper\Config\Api;
use ZaifWrapper\Lib\CommonConst;
use ZaifWrapper\Util\Trade;
use ZaifWrapper\Util\RequestCreator;

class ZaifWrapper
{
    /**
     * @return RequestCreator
     */
    public static function lastPrice()
    {
        return new RequestCreator(CommonConst::API_TYPE_LAST_PRICE);
    }

    /**
     * @return RequestCreator
     */
    public static function ticker()
    {
        return new RequestCreator(CommonConst::API_TYPE_TICKER);
    }

    /**
     * @return RequestCreator
     */
    public static function trades()
    {
        return new RequestCreator(CommonConst::API_TYPE_TRADES);
    }

    /**
     * @return RequestCreator
     */
    public static function depth()
    {
        return new RequestCreator(CommonConst::API_TYPE_DEPTH);
    }

    public static function trade()
    {
        return new Trade(Api::API_KEY, Api::API_SECRET);
    }

}