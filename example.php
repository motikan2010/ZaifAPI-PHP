<?php

require_once './vendor/autoload.php';

use ZaifWrapper\ZaifWrapper;

$zaif = ZaifWrapper::trade();

$options = [

];

var_dump($zaif->trade('mona_jpy', 'bid', 650 , 1, $options));
