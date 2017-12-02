<?php

namespace ZaifWrapper;

use ZaifWrapper\Config\Api;
use ZaifWrapper\Lib\CommonConst;
use ZaifWrapper\Util\PublicApi;
use ZaifWrapper\Util\TradeApi;

class ZaifWrapper
{

    /**
     * 公開API
     */

    /**
     * @return PublicApi
     */
    public static function lastPrice()
    {
        return new PublicApi(CommonConst::API_TYPE_LAST_PRICE);
    }

    /**
     * @return PublicApi
     */
    public static function ticker()
    {
        return new PublicApi(CommonConst::API_TYPE_TICKER);
    }

    /**
     * @return PublicApi
     */
    public static function trades()
    {
        return new PublicApi(CommonConst::API_TYPE_TRADES);
    }

    /**
     * @return PublicApi
     */
    public static function depth()
    {
        return new PublicApi(CommonConst::API_TYPE_DEPTH);
    }

    /**
     * 取引API
     */

    /**
     * @return TradeApi
     */
    public static function trade()
    {
        return new TradeApi(Api::API_KEY, Api::API_SECRET);
    }

}