<?php
namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\UserInfoShareResponse;

/**
 * 支付宝会员授权信息查询接口
 * @author Wenchaojun <343169893@qq.com>
 * @link https://docs.open.alipay.com/api_2/alipay.user.info.share
 */
class UserInfoShareRequest extends AbstractAopRequest
{

    protected $method = 'alipay.user.info.share';
    
    /**
     * 针对用户授权接口，获取用户相关数据时，用于标识用户授权关系。详见用户信息授权
     * @param string $token
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setAuthToken($token){
        return $this->setParameter('auth_token', $token);
    }
    
    /**
     * 应用授权概述
     * @param string $token
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setAppAuthToken($token){
        return $this->setParameter('app_auth_token', $token);
    }
    
    public function validateParams()
    {
        $this->validate('app_id', "auth_token");
    }
    public function sendData($data)
    {
        $data = parent::sendData($data);
        
        return $this->response = new UserInfoShareResponse($this, $data);
    }
}