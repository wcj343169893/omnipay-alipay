<?php
namespace Omnipay\Alipay\Responses;

class UserInfoShareResponse extends AbstractResponse
{
    //alipay.user.info.share
    protected $key = 'alipay_user_info_share_response';
    
    /**
     * @var SystemOauthTokenRequest
     */
    protected $request;
    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return $this->getCode() == '10000';
    }
    public function getCode()
    {
        return $this->getData('code');
    }
    public function getData($key = null)
    {
        if ($key) {
            return array_get($this->data, "{$this->key}.{$key}");
        } else {
            return array_get($this->data, $this->key);
        }
    }
}