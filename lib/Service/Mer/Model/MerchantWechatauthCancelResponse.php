<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantWechatauthCancelResponse extends BaseResponse
{
    /**
     * @var ApplymentCancelRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ApplymentCancelRespDto';
    }

    /**
     * @param ApplymentCancelRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplymentCancelRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
