<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeRefundqueryResponse extends BaseResponse
{
    /**
     * @var QueryRefundResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\QueryRefundResponseDTO';
    }

    /**
     * @param QueryRefundResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRefundResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
