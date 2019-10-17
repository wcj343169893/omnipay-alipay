<?php

namespace Omnipay\Alipay\Responses;

use Omnipay\Alipay\Requests\AopTradeOrderSettleRequest;

class AopTradeRoyaltyRelationUnbindResponse extends AbstractAopResponse
{
    protected $key = 'alipay_trade_royalty_relation_unbind_response';

    /**
     * @var AopTradeOrderSettleRequest
     */
    protected $request;
}
