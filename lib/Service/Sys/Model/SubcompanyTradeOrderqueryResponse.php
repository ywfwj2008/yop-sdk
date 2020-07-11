<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SubcompanyTradeOrderqueryResponse extends BaseResponse
{
    /**
     * @var YopQueryOrderResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopQueryOrderResDTO';
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
