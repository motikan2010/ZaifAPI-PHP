<?php

require_once './vendor/autoload.php';

use ZaifWrapper\ZaifWrapper;

$lastPrice = ZaifWrapper::lastPrice();

$lastPrice->btcJpy();
/*
{
    "last_price": 1243000.0
}
 */


ZaifWrapper::ticker()->btcJpy();
/*
{
    "last": 1243000.0,
    "high": 1253385.0,
    "low": 1216715.0,
    "vwap": 1237125.5082,
    "volume": 5769.4382,
    "bid": 1242775.0,
    "ask": 1243000.0
}
 */


$zaif = ZaifWrapper::privateTrade();

$options = [

];

// 取引注文を行います。
$zaif->trade('mona_jpy', 'bid', 650 , 1, $options);
/*
object(stdClass)#4 (2) {
  ["success"]=>
  int(1)
  ["return"]=>
  object(stdClass)#5 (4) {
    ["received"]=>
    float(0)
    ["remains"]=>
    float(1)
    ["order_id"]=>
    int(100000000)
    ["funds"]=>
    object(stdClass)#6 (7) {
      ["jpy"]=>
      float(10.00)
      ["btc"]=>
      float(0.0100)
      ["xem"]=>
      float(1000.00)
      ["mona"]=>
      float(10.0)
      ["BCH"]=>
      float(0.1)
      ["HYOU"]=>
      float(0)
      ["PACHI"]=>
      float(0)
    }
  }
}
 */

// 現在有効な注文一覧を取得します（未約定注文一覧）。
$zaif->activeOrders();
/*
object(stdClass)#4 (2) {
  ["success"]=>
  int(1)
  ["return"]=>
  object(stdClass)#6 (1) {
    ["100000000"]=>
    object(stdClass)#5 (6) {
      ["currency_pair"]=>
      string(8) "mona_jpy"
      ["action"]=>
      string(3) "bid"
      ["amount"]=>
      float(1)
      ["price"]=>
      float(650)
      ["timestamp"]=>
      string(10) "1512281749"
      ["comment"]=>
      string(0) ""
    }
  }
}
*/

// 注文の取消しを行います。
$zaif->cancelOrder(100000000);
/*
object(stdClass)#4 (2) {
  ["success"]=>
  int(1)
  ["return"]=>
  object(stdClass)#5 (2) {
    ["order_id"]=>
    int(281668280)
    ["funds"]=>
    object(stdClass)#6 (7) {
      ["jpy"]=>
      float(676.83)
      ["btc"]=>
      float(0.0105)
      ["xem"]=>
      float(3827.97)
      ["mona"]=>
      float(27.05)
      ["BCH"]=>
      float(0.3)
      ["HYOU"]=>
      float(0)
      ["PACHI"]=>
      float(0)
    }
  }
}
*/

// 入金履歴を取得します。
$zaif->depositHistory('jpy');
/*
object(stdClass)#4 (2) {
  ["success"]=>
  int(1)
  ["return"]=>
  object(stdClass)#6 (2) {
    ["999999"]=>
    object(stdClass)#5 (2) {
      ["timestamp"]=>
      string(10) "1511847143"
      ["amount"]=>
      float(100)
    }
    ["158274"]=>
    object(stdClass)#7 (2) {
      ["timestamp"]=>
      string(10) "1511349936"
      ["amount"]=>
      float(1000)
    }
  }
}
*/