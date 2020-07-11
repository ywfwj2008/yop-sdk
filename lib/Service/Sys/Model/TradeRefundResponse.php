<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeRefundResponse extends BaseResponse
{
    /**
     * @var ResponseRefundDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\ResponseRefundDTO';
    }

    /**
     * @param ResponseRefundDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ResponseRefundDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
