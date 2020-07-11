<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantMerchantSettleWayUpdateResponse extends BaseResponse
{
    /**
     * @var RespBaseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RespBaseDto';
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
