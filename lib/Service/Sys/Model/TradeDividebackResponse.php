<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeDividebackResponse extends BaseResponse
{
    /**
     * @var YopDivideBackResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopDivideBackResDTO';
    }

    /**
     * @param YopDivideBackResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopDivideBackResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
