<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantQueryBankCardBinInfoResponse extends BaseResponse
{
    /**
     * @var MerBankCardBinRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\MerBankCardBinRespDto';
    }

    /**
     * @param MerBankCardBinRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerBankCardBinRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
