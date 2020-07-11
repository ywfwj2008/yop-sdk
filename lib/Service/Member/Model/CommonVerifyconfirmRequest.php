<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonVerifyconfirmRequest extends BaseRequest
{
    /**
     * @var 
     */
    private $body;

    /**
     * Gets body
     *
     * @return 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets body
     *
     * @param  $body
     * @return CommonVerifyconfirmRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonVerifyconfirm';
    }


}
