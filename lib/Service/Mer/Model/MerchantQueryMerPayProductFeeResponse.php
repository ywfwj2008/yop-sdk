<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantQueryMerPayProductFeeResponse extends BaseResponse
{
    /**
     * @var MerProductRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerProductRespDto';
    }

    /**
     * @param MerProductRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerProductRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
