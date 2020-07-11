<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PromotionCreateResponse extends BaseResponse
{
    /**
     * @var PromotionResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\PromotionResponseDTO';
    }

    /**
     * @param PromotionResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PromotionResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
