<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindpayConfirmResponse extends BaseResponse
{
    /**
     * @var ApiBindPayConfirmResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\ApiBindPayConfirmResponseDTO';
    }

    /**
     * @param ApiBindPayConfirmResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApiBindPayConfirmResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
