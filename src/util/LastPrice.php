<?php

namespace ZaifPHP\Util;

use ZaifPHP\Lib\CommonConst;

class LastPrice extends RequestCreator
{
    public function __construct()
    {
        parent::__construct(CommonConst::API_TYPE_LAST_PRICE);
    }



}