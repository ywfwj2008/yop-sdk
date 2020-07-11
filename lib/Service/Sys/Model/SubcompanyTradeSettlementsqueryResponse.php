<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class SubcompanyTradeSettlementsqueryResponse extends BaseResponse
{
    /**
     * @var YopQuerySettleRecordResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\YopQuerySettleRecordResDTO';
    }

    /**
     * @param YopQuerySettleRecordResDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQuerySettleRecordResDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
