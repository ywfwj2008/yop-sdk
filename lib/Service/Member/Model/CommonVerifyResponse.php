<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CommonVerifyResponse extends BaseResponse
{
    /**
     * @var VerifyResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Member\Model\VerifyResponseDTO';
    }

    /**
     * @param VerifyResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return VerifyResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
