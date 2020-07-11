<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardQueryorderResponse extends BaseResponse
{
    /**
     * @var OpenQueryOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenQueryOrderResponseDTO';
    }

    /**
     * @param OpenQueryOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenQueryOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
