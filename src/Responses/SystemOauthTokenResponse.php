<?php
namespace Omnipay\Alipay\Responses;

class SystemOauthTokenResponse extends AbstractResponse
{
    protected $key = 'alipay_system_oauth_token_response';
    
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
        return true;
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