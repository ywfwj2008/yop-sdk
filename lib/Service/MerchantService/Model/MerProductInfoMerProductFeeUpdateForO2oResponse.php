<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerProductInfoMerProductFeeUpdateForO2oResponse extends BaseResponse
{
    /**
     * @var MerRespBaseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MerchantService\Model\MerRespBaseDto';
    }

    /**
     * @param MerRespBaseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerRespBaseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
