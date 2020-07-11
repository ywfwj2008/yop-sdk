<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ModifyPayProductInfoResponse extends BaseResponse
{
    /**
     * @var MerchantUpdatePayProductRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Router\Model\MerchantUpdatePayProductRespDTO';
    }

    /**
     * @param MerchantUpdatePayProductRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantUpdatePayProductRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
