<?php

namespace ZaifPHP\Lib;

class ApiRequest
{
    /**
     * @param $apiPath
     * @return mixed
     */
    public static function sendRequest($apiPath)
    {
        $url = CommonConst::API_URL . CommonConst::PUBLIC_API_PATH . $apiPath;
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = curl_exec($curl);
        curl_close($curl);

        return $apiResponse;
    }

    /**
     * @param $apiPath
     * @return mixed
     */
    public static function sendTradeRequest($header, $postDataQuery)
    {
        $url = CommonConst::API_URL . CommonConst::TRADE_API_PATH;
        $curl = curl_init($url);

        $options = [
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postDataQuery,
            CURLOPT_HTTPHEADER => $header,
        ];
        curl_setopt_array($curl, $options);
        $apiResponse = curl_exec($curl);
        curl_close($curl);

        return $apiResponse;
    }

}