<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantProductFeeModifyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merNo;
    /**
     * @var string
     */
    private $productInfo;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MerchantProductFeeModifyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets merNo
     *
     * @return string
     */
    public function getMerNo()
    {
        return $this->merNo;
    }

    /**
     * Sets merNo
     *
     * @param string $merNo
     * @return MerchantProductFeeModifyRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
        return $this;
    }
    /**
     * Gets productInfo
     *
     * @return string
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets productInfo
     *
     * @param string $productInfo
     * @return MerchantProductFeeModifyRequest
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantProductFeeModify';
    }


}
