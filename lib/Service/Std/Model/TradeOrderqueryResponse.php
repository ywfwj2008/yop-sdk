<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeOrderqueryResponse extends BaseResponse
{
    /**
     * @var YopQueryOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryOrderResDTO';
    }

    /**
     * @param YopQueryOrderResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryOrderResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
