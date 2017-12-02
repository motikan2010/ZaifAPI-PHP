<?php

namespace ZaifWrapper\Lib;

class CommonConst
{
    // API URL
    const API_URL         = 'https://api.zaif.jp';
    const PUBLIC_API_PATH = '/api/1';
    const TRADE_API_PATH  = '/tapi';

    // Public API Type
    const API_TYPE_LAST_PRICE = '/last_price';
    const API_TYPE_TICKER     = '/ticker';
    const API_TYPE_TRADES     = '/trades';
    const API_TYPE_DEPTH      = '/depth';

    // Trade API Type
    const TRADE_GET_INFO          = 'get_info';
    const TRADE_GET_INFO2         = 'get_info2';
    const TRADE_GET_PERSONAL_INFO = 'get_personal_info';
    const TRADE_GET_ID_INFO       = 'get_id_info';
    const TRADE_TRADE_HISTORY     = 'trade_history';
    const TRADE_ACTIVE_ORDERS     = 'active_orders';
    const TRADE_TRADE             = 'trade';
    const CANCEL_ORDER            = 'cancel_order';
    const WITHDRAW                = 'withdraw';
    const DEPOSIT_HISTORY         = 'deposit_history';
    const WITHDRAW_HISTORY        = 'withdraw_history';

    // Exchange Type
    const BTC_JPY  = '/btc_jpy';
    const XEM_JPY  = '/xem_jpy';
    const MONA_JPY = '/mona_jpy';
    const MONA_BTC = '/mona_btc';

}