<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class QueryPayProductInfoResponse extends BaseResponse
{
    /**
     * @var MerchantPayProductRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Router\Model\MerchantPayProductRespDTO';
    }

    /**
     * @param MerchantPayProductRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantPayProductRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
