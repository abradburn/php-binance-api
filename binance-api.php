<?php

namespace Binance;

abstract class BinanceAPI
{
  // Properties.
  // Response array mappings.
  protected $wsKlineMapping = [
    't' => 'openTime',
    'T' => 'closeTime',
    's' => 'symbol',
    'i' => 'interval',
    'f' => 'firstTradeId',
    'L' => 'lastTradeId',
    'o' => 'open',
    'c' => 'close',
    'h' => 'high',
    'l' => 'low',
    'v' => 'volume',
    'n' => 'trades',
    'x' => 'closed',
    'q' => 'quoteVolume',
    'V' => 'assetBuyVolume',
    'Q' => 'takerBuyVolume',
    'B' => 'ignored'
  ];
}
