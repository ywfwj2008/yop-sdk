<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardPayerrequestResponse extends BaseResponse
{
    /**
     * @var OpenPayerAuthBindCardResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenPayerAuthBindCardResponseDTO';
    }

    /**
     * @param OpenPayerAuthBindCardResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenPayerAuthBindCardResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
