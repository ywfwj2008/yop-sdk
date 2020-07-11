<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeOrderResponse extends BaseResponse
{
    /**
     * @var YopCreateOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopCreateOrderResDTO';
    }

    /**
     * @param YopCreateOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCreateOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
