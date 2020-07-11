<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class TransferSendResponse extends BaseResponse
{
    /**
     * @var YopTransferParamRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Balance\Model\YopTransferParamRespDTO';
    }

    /**
     * @param YopTransferParamRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopTransferParamRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
