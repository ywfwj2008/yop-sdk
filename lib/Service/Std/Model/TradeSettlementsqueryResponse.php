<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TradeSettlementsqueryResponse extends BaseResponse
{
    /**
     * @var YopQuerySettleRecordResDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopQuerySettleRecordResDTO';
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
