<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeEnddivideResponse extends BaseResponse
{
    /**
     * @var YopOrderEndDivideResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopOrderEndDivideResDTO';
    }

    /**
     * @param YopOrderEndDivideResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopOrderEndDivideResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
