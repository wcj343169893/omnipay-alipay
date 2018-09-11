<?php

namespace Omnipay\Alipay;

use Omnipay\Alipay\Requests\UserInfoShareRequest;

/**
 * 支付宝会员授权信息查询接口
 * @package Omnipay\Alipay
 * @link    https://docs.open.alipay.com/api_2/alipay.user.info.share
 */
class InfoGateway extends AbstractAopGateway
{
    
    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Alipay Info';
    }
    
    /**
     * @param array $parameters
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(UserInfoShareRequest::class, $parameters);
    }
}
