<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\AopTradeOrderSettleRequest;

class AopTradeRoyaltyRelationBindResponse extends AbstractAopResponse
{
    protected $key = 'alipay_trade_royalty_relation_bind_response';

    /**
     * @var AopTradeOrderSettleRequest
     */
    protected $request;
}
