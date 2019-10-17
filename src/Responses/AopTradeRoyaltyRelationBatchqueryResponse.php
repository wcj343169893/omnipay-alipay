<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\AopTradeOrderSettleRequest;

class AopTradeRoyaltyRelationBatchqueryResponse extends AbstractAopResponse
{
    protected $key = 'alipay_trade_royalty_relation_batchquery_response';

    /**
     * @var AopTradeOrderSettleRequest
     */
    protected $request;
}
