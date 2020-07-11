<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountTransferQueryTransferResponse extends BaseResponse
{
    /**
     * @var TransferResultDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cloud-account\Model\TransferResultDTO';
    }

    /**
     * @param TransferResultDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferResultDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
