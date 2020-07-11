<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerOutInvokeSendMerSmsNotifyResponse extends BaseResponse
{
    /**
     * @var RespBaseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MerchantService\Model\RespBaseDto';
    }

    /**
     * @param RespBaseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RespBaseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
