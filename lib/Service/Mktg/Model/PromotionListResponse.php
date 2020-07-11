<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class PromotionListResponse extends BaseResponse
{
    /**
     * @var QueryPromotionResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mktg\Model\QueryPromotionResponseDTO';
    }

    /**
     * @param QueryPromotionResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryPromotionResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
