<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantSettleBankCardInfoUpdateResponse extends BaseResponse
{
    /**
     * @var SettleInfoUpdateRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\SettleInfoUpdateRespDto';
    }

    /**
     * @param SettleInfoUpdateRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleInfoUpdateRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
