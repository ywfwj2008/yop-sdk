<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantQueryMerchantBasicInfoResponse extends BaseResponse
{
    /**
     * @var MerchantBasicInfoRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantBasicInfoRespDTO';
    }

    /**
     * @param MerchantBasicInfoRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantBasicInfoRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
