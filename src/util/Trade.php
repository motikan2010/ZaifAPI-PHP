<?php

namespace ZaifWrapper\Util;

use ZaifWrapper\Lib\ApiRequest;
use ZaifWrapper\Lib\CommonConst;

/**
 * 現物取引API
 *
 * Class Trade
 * @package ZaifWrapper\Util
 */
class Trade
{

    private $key = null;
    private $secret = null;
    private $nonce = null;

    public function __construct($apiKey, $apiSecret)
    {
        $this->key = $apiKey;
        $this->secret = $apiSecret;
        $this->nonce = time();
    }


    private function execute($method, $params = null)
    {
        $postData = [
            "nonce" => $this->nonce++,
            "method" => $method,
        ];

        // パラメータが存在する場合はパラメータを付与
        if ($params !== null) {
            $postData = array_merge($postData, $params);
        }

        // リクエストクエリを生成
        $postDataQuery = http_build_query($postData);

        // 認証情報を付与
        $sign = hash_hmac('sha512', $postDataQuery, $this->secret);
        $header = ["sign: {$sign}", "key: {$this->key}"];

        // リクエスト送信
        $data = ApiRequest::sendTradeRequest($header, $postDataQuery);

        return json_decode($data);
    }

    /**
     * 現在の残高（余力および残高・トークン）、APIキーの権限、過去のトレード数、アクティブな注文数、サーバーのタイムスタンプを取得します。
     *
     * @return mixed
     */
    public function getInfo()
    {
        return $this->execute(CommonConst::TRADE_GET_INFO);
    }

    /**
     * get_infoの軽量版で、過去のトレード数を除く項目を返します。
     *
     * @return mixed
     */
    public function getInfo2()
    {
        return $this->execute(CommonConst::TRADE_GET_INFO2);
    }

    /**
     * チャットに使用されるニックネームと画像のパスを返します。
     *
     * @return mixed
     */
    public function getPersonalInfo()
    {
        return $this->execute(CommonConst::TRADE_GET_PERSONAL_INFO);
    }

    /**
     * ユーザーIDやメールアドレスといった個人情報を取得します。
     *
     * @return mixed
     */
    public function getIdInfo(){
        return $this->execute(CommonConst::TRADE_GET_ID_INFO);
    }

    /**
     * ユーザー自身の取引履歴を取得します。
     *
     * @param null $options
     * @return mixed
     */
    public function tradeHistory($options = null)
    {
        return $this->execute(CommonConst::TRADE_TRADE_HISTORY, $options);
    }

    /**
     * @param $options
     * @return mixed
     */
    public function activeOrders($options = null)
    {
        return $this->execute(CommonConst::TRADE_ACTIVE_ORDERS, $options);
    }

    /**
     * @param $currencyPair string
     * @param $action string 注文の種類
     * @param $price string 指値注文価格
     * @param $amount int 数量
     * @param $options array オプション
     * @return mixed
     */
    public function trade($currencyPair, $action, $price, $amount, $options = null)
    {
        $params = [
            'currency_pair' => $currencyPair,
            'action'        => $action,
            'price'         => $price,
            'amount'        => $amount,
        ];

        if ($options !== null) {
            $params = array_merge($params, $options);
        }

        return $this->execute(CommonConst::TRADE_TRADE, $params);
    }

}