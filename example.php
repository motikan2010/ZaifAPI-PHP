<?php

require_once './vendor/autoload.php';

use ZaifPHP\Util\LastPrice;
use ZaifPHP\Util\Ticker;

echo 'LastPriceUtil::btcJpy()  -> ' . LastPrice::btcJpyJson() . PHP_EOL;
echo 'LastPriceUtil::xemJpy()  -> ' . LastPrice::xemJpyJson() . PHP_EOL;
echo 'LastPriceUtil::monaJpy() -> ' . LastPrice::monaJpyJson() . PHP_EOL;
echo 'LastPriceUtil::monaBtc() -> ' . LastPrice::monaBtcJson() . PHP_EOL;

/*
echo 'TickerUtil::btcJpy()     -> ' . TickerUtil::btcJpy() . PHP_EOL;
echo 'TickerUtil::xemJpy()     -> ' . TickerUtil::xemJpy() . PHP_EOL;
echo 'TickerUtil::monaJpy()    -> ' . TickerUtil::monaJpy() . PHP_EOL;
echo 'TickerUtil::monaBtc()    -> ' . TickerUtil::monaBtc() . PHP_EOL;
*/