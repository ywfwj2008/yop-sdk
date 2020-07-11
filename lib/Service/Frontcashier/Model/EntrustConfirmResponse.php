<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EntrustConfirmResponse extends BaseResponse
{
    /**
     * @var OpenEntrustConfirmResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenEntrustConfirmResponseDTO';
    }

    /**
     * @param OpenEntrustConfirmResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenEntrustConfirmResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
