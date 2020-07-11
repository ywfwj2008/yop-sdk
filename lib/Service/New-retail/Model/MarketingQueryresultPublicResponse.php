<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MarketingQueryresultPublicResponse extends BaseResponse
{
    /**
     * @var PrepareQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\New-retail\Model\PrepareQueryRespDTO';
    }

    /**
     * @param PrepareQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PrepareQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
