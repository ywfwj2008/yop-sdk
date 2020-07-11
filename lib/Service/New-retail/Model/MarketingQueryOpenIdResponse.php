<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MarketingQueryOpenIdResponse extends BaseResponse
{
    /**
     * @var MarketingOpenIdRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingOpenIdRespDTO';
    }

    /**
     * @param MarketingOpenIdRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MarketingOpenIdRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
