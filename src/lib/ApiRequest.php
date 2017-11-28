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
        $url = CommonConst::getApiUrl() . $apiPath;
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = curl_exec($curl);
        curl_close($curl);

        return $apiResponse;
    }

}