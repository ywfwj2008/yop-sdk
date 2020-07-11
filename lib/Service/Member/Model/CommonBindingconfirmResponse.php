<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CommonBindingconfirmResponse extends BaseResponse
{
    /**
     * @var BindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Member\Model\BindCardResponseDTO';
    }

    /**
     * @param BindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
