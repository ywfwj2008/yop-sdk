<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardRequestResponse extends BaseResponse
{
    /**
     * @var OpenAuthBindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenAuthBindCardResponseDTO';
    }

    /**
     * @param OpenAuthBindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenAuthBindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
