<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MarketingApplyPublicResponse extends BaseResponse
{
    /**
     * @var MarketingRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\New-retail\Model\MarketingRespDTO';
    }

    /**
     * @param MarketingRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MarketingRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
