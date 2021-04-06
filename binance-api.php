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

  protected $wsTickerMapping = [
    'e' => 'eventType',
    'E' => 'eventTime',
    's' => 'symbol',
    'p' => 'priceChange',
    'P' => 'percentChange',
    'w' => 'averagePrice',
    'x' => 'prevClose',
    'c' => 'close',
    'Q' => 'closeQty',
    'b' => 'bestBid',
    'B' => 'bestBidQty',
    'a' => 'bestAsk',
    'A' => 'bestAskQty',
    'o' => 'open',
    'h' => 'high',
    'l' => 'low',
    'v' => 'volume',
    'q' => 'quoteVolume',
    'O' => 'openTime',
    'C' => 'closeTime',
    'F' => 'firstTradeId',
    'L' => 'lastTradeId',
    'n' => 'numTrades'
  ];

  protected $wsExecutionMapping = [
    's' => 'symbol',
    'S' => 'side',
    'o' => 'orderType',
    'q' => 'quantity',
    'p' => 'price',
    'x' => 'executionType',
    'X' => 'orderStatus',
    'r' => 'rejectReason',
    'i' => 'orderId',
    'c' => 'clientOrderId',
    'T' => 'orderTime',
    'E' => 'eventTime'
  ];

  protected $candleMapping = [
    0 => 'openTime',
    1 => 'open',
    2 => 'high',
    3 => 'low',
    4 => 'close',
    5 => 'assetVolume',
    6 => 'closeTime',
    7 => 'baseVolume',
    8 => 'trades',
    9 => 'assetBuyVolume',
    10 => 'takerBuyVolume',
    11 => 'ignored'
  ];
}
