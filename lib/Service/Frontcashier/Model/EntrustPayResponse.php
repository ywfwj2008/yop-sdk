<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EntrustPayResponse extends BaseResponse
{
    /**
     * @var APIEntrustPaymentResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\APIEntrustPaymentResponseDTO';
    }

    /**
     * @param APIEntrustPaymentResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return APIEntrustPaymentResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
