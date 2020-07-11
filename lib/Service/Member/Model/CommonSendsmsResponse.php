<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CommonSendsmsResponse extends BaseResponse
{
    /**
     * @var SendSmsResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Member\Model\SendSmsResponseDTO';
    }

    /**
     * @param SendSmsResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SendSmsResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
