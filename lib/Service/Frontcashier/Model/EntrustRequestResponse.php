<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EntrustRequestResponse extends BaseResponse
{
    /**
     * @var OpenEntrustResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\OpenEntrustResponseDTO';
    }

    /**
     * @param OpenEntrustResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenEntrustResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
