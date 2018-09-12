<?php
namespace Omnipay\Alipay\Requests;

// OpenAuthSdkCodeGetRequest
// alipay.open.auth.sdk.code.get
class OpenAuthSdkCodeGetRequest extends AbstractAopRequest
{

    protected $method = 'alipay.open.auth.sdk.code.get';

    protected function setDefaults()
    {
        // target_id
        $this->setParameter('apiname', "com.alipay.account.auth");
        $this->setParameter('app_name', "mc");
        $this->setParameter('biz_type', "openservice");
        $this->setParameter('product_id', "APP_FAST_LOGIN");
        //$this->setParameter('scope', "kuaijie");
        $this->setParameter('auth_type', "AUTHACCOUNT");
        if (! $this->getScope()) {
            $this->setScope("kuaijie");
        }
        if (! $this->getTargetId()) {
            $this->setTargetId(date('YmdHis').rand(10000,99999));
        }
    }
    //auth_base auth_user
    public function setScope($scope){
        $this->setParameter('scope',$scope);
    }
    public function getScope(){
        return $this->getParameter('scope');
    }
    public function setPid($pid){
        $this->setParameter('pid',$pid);
    }
    public function setTargetId($id){
        $this->setParameter('target_id',$id);
    }
    public function getTargetId(){
        $this->getParameter('target_id');
    }
    public function validateParams()
    {
        $this->validate('app_id', "pid");
    }
}