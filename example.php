<?php

require_once './vendor/autoload.php';

use ZaifPHP\ZaifPHP;


// echo ZaifPHP::lastPrice()->monaBtcJson() . PHP_EOL;
// echo ZaifPHP::trades()->monaBtcJson() . PHP_EOL;
// echo ZaifPHP::ticker()->monaBtcJson() . PHP_EOL;

$zaif = ZaifPHP::trade();
var_dump($zaif->info());
