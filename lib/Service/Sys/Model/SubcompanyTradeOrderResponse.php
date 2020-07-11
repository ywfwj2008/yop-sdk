<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SubcompanyTradeOrderResponse extends BaseResponse
{
    /**
     * @var YopCreateOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopCreateOrderResDTO';
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
