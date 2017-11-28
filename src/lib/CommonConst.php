<?php

namespace ZaifPHP\Lib;

class CommonConst
{
    const API_URL = 'https://api.zaif.jp/api/1';

    // APi Type
    const API_TYPE_LAST_PRICE = 'last_price';
    const API_TYPE_TICKER = 'ticker';
    const API_TYPE_TRADES = 'trades';
    const API_TYPE_DEPTH = 'depth';
    const API_TYPE_CURRENCY_PAIRS = 'currency_pairs';
    const API_TYPE_CURRENCIES = 'currencies';

    // Exchange Type
    const BTC_JPY = 'btc_jpy';
    const XEM_JPY = 'xem_jpy';
    const MONA_JPY = 'mona_jpy';
    const MONA_BTC = 'mona_btc';

    /**
     * @param $type
     * @return string | null
     */
    public static function getApiType($type)
    {
        $apiTypeArr = [
            'last_price'     => '/last_price',
            'ticker'         => '/ticker',
            'trades'         => '/trades',
            'depth'          => '/depth',
            'currency_pairs' => '/currency_pairs',
            'currencies'     => '/currencies',
        ];

        return $apiTypeArr[$type];
    }

    /**
     * @param $exchange
     * @return string | null
     */
    public static function getApiExchange($exchange)
    {
        $apiExchangeArr = [
            'btc_jpy'  => '/btc_jpy',
            'xem_jpy'  => '/xem_jpy',
            'mona_jpy' => '/mona_jpy',
            'mona_btc' => '/mona_btc',
        ];

        return $apiExchangeArr[$exchange];
    }

}