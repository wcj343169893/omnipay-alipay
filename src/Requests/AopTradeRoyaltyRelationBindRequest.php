<?php

namespace Omnipay\Alipay\Requests;

use Omnipay\Common\Exception\InvalidRequestException;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Alipay\Responses\AopTradeRoyaltyRelationBindResponse;

/**
 * 分账关系绑定
 * @package Omnipay\Alipay\Requests
 * @link    https://docs.open.alipay.com/api_31/alipay.trade.royalty.relation.bind/
 */
class AopTradeRoyaltyRelationBindRequest extends AbstractAopRequest
{
    protected $method = 'alipay.trade.royalty.relation.bind';

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

        return $this->response = new AopTradeRoyaltyRelationBindResponse($this, $data);
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
