<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ApiOrderpayResponse extends BaseResponse
{
    /**
     * @var UnifiedAPICashierResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\UnifiedAPICashierResponseDTO';
    }

    /**
     * @param UnifiedAPICashierResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UnifiedAPICashierResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
