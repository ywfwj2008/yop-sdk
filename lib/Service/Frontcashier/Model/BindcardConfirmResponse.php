<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BindcardConfirmResponse extends BaseResponse
{
    /**
     * @var OpenAuthBindCardConfirmResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenAuthBindCardConfirmResponseDTO';
    }

    /**
     * @param OpenAuthBindCardConfirmResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenAuthBindCardConfirmResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
