<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferBatchSendResponse extends BaseResponse
{
    /**
     * @var YopBatchTransferParamRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Balance\Model\YopBatchTransferParamRespDTO';
    }

    /**
     * @param YopBatchTransferParamRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopBatchTransferParamRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
