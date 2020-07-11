<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantAccountBindCardQueryResponse extends BaseResponse
{
    /**
     * @var BindingCardQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BindingCardQueryRespDTO';
    }

    /**
     * @param BindingCardQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindingCardQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
