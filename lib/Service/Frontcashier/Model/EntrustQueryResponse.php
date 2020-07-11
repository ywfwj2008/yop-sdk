<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class EntrustQueryResponse extends BaseResponse
{
    /**
     * @var NcEntrustQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\NcEntrustQueryResponseDTO';
    }

    /**
     * @param NcEntrustQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return NcEntrustQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
