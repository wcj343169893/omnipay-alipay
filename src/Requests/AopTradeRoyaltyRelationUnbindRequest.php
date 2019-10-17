<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Alipay\Responses\AopTradeRoyaltyRelationUnbindResponse;

/**
 * 分账关系解绑
 * @package Omnipay\Alipay\Requests
 * @link    https://docs.open.alipay.com/api_31/alipay.trade.royalty.relation.unbind/
 */
class AopTradeRoyaltyRelationUnbindRequest extends AbstractAopRequest
{
    protected $method = 'alipay.trade.royalty.relation.unbind';


    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     * @throws InvalidRequestException
     */
    public function sendData($data)
    {
        $data = parent::sendData($data);

        return $this->response = new AopTradeRoyaltyRelationUnbindResponse($this, $data);
    }


    public function validateParams()
    {
        parent::validateParams();

        $this->validateBizContent(
            'out_request_no',
            'receiver_list'
        );
    }
}
