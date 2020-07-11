<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class QueryCustomerAmountResponse extends BaseResponse
{
    /**
     * @var YopQueryAmountRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Balance\Model\YopQueryAmountRespDTO';
    }

    /**
     * @param YopQueryAmountRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryAmountRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
