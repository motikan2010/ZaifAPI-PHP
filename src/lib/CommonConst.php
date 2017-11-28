<?php

namespace ZaifPHP\Lib;

class CommonConst
{
    /**
     * @return string
     */
    public static function getApiUrl()
    {
        return 'https://api.zaif.jp/api/1';
    }

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