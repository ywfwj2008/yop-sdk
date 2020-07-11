<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindpayRequestResponse extends BaseResponse
{
    /**
     * @var ApiBindPayPaymentResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\ApiBindPayPaymentResponseDTO';
    }

    /**
     * @param ApiBindPayPaymentResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApiBindPayPaymentResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
