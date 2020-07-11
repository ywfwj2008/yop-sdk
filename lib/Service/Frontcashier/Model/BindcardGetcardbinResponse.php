<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardGetcardbinResponse extends BaseResponse
{
    /**
     * @var OpenQueryCardbinResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenQueryCardbinResponseDTO';
    }

    /**
     * @param OpenQueryCardbinResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenQueryCardbinResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
