<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindpaySendsmsResponse extends BaseResponse
{
    /**
     * @var ApiBindPaySendSmsResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\ApiBindPaySendSmsResponseDTO';
    }

    /**
     * @param ApiBindPaySendSmsResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApiBindPaySendSmsResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
