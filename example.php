<?php

require_once './vendor/autoload.php';

use ZaifPHP\Util\LastPriceUtil;

echo LastPriceUtil::btcJpy();
echo LastPriceUtil::xemJpy();
echo LastPriceUtil::monaJpy();
echo LastPriceUtil::monaBtc();