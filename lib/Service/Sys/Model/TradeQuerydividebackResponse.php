<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeQuerydividebackResponse extends BaseResponse
{
    /**
     * @var YopQueryDivideBackResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopQueryDivideBackResDTO';
    }

    /**
     * @param YopQueryDivideBackResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryDivideBackResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
