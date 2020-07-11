<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeOrdercloseResponse extends BaseResponse
{
    /**
     * @var ResponseOrderCloseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\ResponseOrderCloseDTO';
    }

    /**
     * @param ResponseOrderCloseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ResponseOrderCloseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
