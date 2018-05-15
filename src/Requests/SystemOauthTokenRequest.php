<?php
namespace Omnipay\Alipay\Requests;

use Omnipay\Alipay\Responses\SystemOauthTokenResponse;

class SystemOauthTokenRequest extends AbstractAopRequest
{

    protected $method = 'alipay.system.oauth.token';

    public function setCode($code)
    {
        $this->setGrantType("authorization_code");
        return $this->setParameter('code', $code);
    }

    public function setRefreshToken($refreshToken)
    {
        $this->setGrantType("refresh_token");
        return $this->setParameter('refresh_token', $refreshToken);
    }

    public function setGrantType($grantType)
    {
        return $this->setParameter('grant_type', $grantType);
    }

    public function validateParams()
    {
        $this->validate('app_id', 'format', 'charset', 'sign_type', 'timestamp', 'version', 'grant_type');
    }
    public function sendData($data)
    {
        $data = parent::sendData($data);
        
        return $this->response = new SystemOauthTokenResponse($this, $data);
    }
}