<?php

namespace ZaifPHP;

use ZaifPHP\Util\LastPrice;
use ZaifPHP\Util\Ticker;
use ZaifPHP\Util\Trades;

class ZaifPHP
{
    /**
     * @return LastPrice
     */
    public static function lastPrice()
    {
        return new LastPrice();
    }

    /**
     * @return Ticker
     */
    public static function ticker()
    {
        return new Ticker();
    }

    /**
     * @return Trades
     */
    public static function trades()
    {
        return new Trades();
    }

}