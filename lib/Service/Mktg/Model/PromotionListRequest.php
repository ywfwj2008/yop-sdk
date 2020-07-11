<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class PromotionListRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $queryPromotionDTOList;

    /**
     * Gets queryPromotionDTOList
     *
     * @return string
     */
    public function getQueryPromotionDTOList()
    {
        return $this->queryPromotionDTOList;
    }

    /**
     * Sets queryPromotionDTOList
     *
     * @param string $queryPromotionDTOList
     * @return PromotionListRequest
     */
    public function setQueryPromotionDTOList($queryPromotionDTOList)
    {
        $this->queryPromotionDTOList = $queryPromotionDTOList;
        return $this;
    }

    public static function getOperationId()
    {
        return 'promotionList';
    }


}
