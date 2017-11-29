<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\CommonConst;

class Trades extends RequestCreator
{
    public function __construct()
    {
        parent::__construct(CommonConst::API_TYPE_TRADES);
    }

}