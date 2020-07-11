<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeMultiorderqueryResponse extends BaseResponse
{
    /**
     * @var YopBatchQueryOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopBatchQueryOrderResDTO';
    }

    /**
     * @param YopBatchQueryOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopBatchQueryOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
