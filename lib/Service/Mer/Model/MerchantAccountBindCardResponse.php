<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantAccountBindCardResponse extends BaseResponse
{
    /**
     * @var BindCardRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\BindCardRespDTO';
    }

    /**
     * @param BindCardRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindCardRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
