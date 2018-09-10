<?php

namespace Omnipay\Alipay;

use Omnipay\Alipay\Requests\OpenAuthSdkCodeGetRequest;

/**
 * Class AopJsGateway
 * @package Omnipay\Alipay
 * @link    https://docs.open.alipay.com/api_1/alipay.trade.create
 * @link    https://myjsapi.alipay.com/jsapi/native/trade-pay.html
 */
class SdkGateway extends AbstractAopGateway
{
    
    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Alipay Oauth';
    }
    public function getDefaultParameters()
    {
        return [
            'signType'  => 'RSA',
        ];
    }
    public function setPid($pid){
        return $this->setParameter('pid',$pid);
    }
    
    /**
     * @param array $parameters
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(OpenAuthSdkCodeGetRequest::class, $parameters);
    }
}
