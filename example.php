<?php

require_once './vendor/autoload.php';

use ZaifPHP\ZaifPHP;
use ZaifPHP\Util\LastPrice;
use ZaifPHP\Util\Ticker;
use ZaifPHP\Util\Trades;

// echo ZaifPHP::lastPrice()->btcJpyJson() . PHP_EOL;
// echo ZaifPHP::ticker()->btcJpyJson() . PHP_EOL;
 echo ZaifPHP::trades()->btcJpyJson() . PHP_EOL;
