<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantProductFeeModifyResponse extends BaseResponse
{
    /**
     * @var MerProductFeeModifyRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerProductFeeModifyRespDto';
    }

    /**
     * @param MerProductFeeModifyRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerProductFeeModifyRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
