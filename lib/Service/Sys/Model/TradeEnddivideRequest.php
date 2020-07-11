<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeEnddivideRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $endDivideUrl;
    /**
     * @var string
     */
    private $endDivideRequestId;
    /**
     * @var string
     */
    private $endDivideDesc;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $hmac;

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return TradeEnddivideRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return TradeEnddivideRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets endDivideUrl
     *
     * @return string
     */
    public function getEndDivideUrl()
    {
        return $this->endDivideUrl;
    }

    /**
     * Sets endDivideUrl
     *
     * @param string $endDivideUrl
     * @return TradeEnddivideRequest
     */
    public function setEndDivideUrl($endDivideUrl)
    {
        $this->endDivideUrl = $endDivideUrl;
        return $this;
    }
    /**
     * Gets endDivideRequestId
     *
     * @return string
     */
    public function getEndDivideRequestId()
    {
        return $this->endDivideRequestId;
    }

    /**
     * Sets endDivideRequestId
     *
     * @param string $endDivideRequestId
     * @return TradeEnddivideRequest
     */
    public function setEndDivideRequestId($endDivideRequestId)
    {
        $this->endDivideRequestId = $endDivideRequestId;
        return $this;
    }
    /**
     * Gets endDivideDesc
     *
     * @return string
     */
    public function getEndDivideDesc()
    {
        return $this->endDivideDesc;
    }

    /**
     * Sets endDivideDesc
     *
     * @param string $endDivideDesc
     * @return TradeEnddivideRequest
     */
    public function setEndDivideDesc($endDivideDesc)
    {
        $this->endDivideDesc = $endDivideDesc;
        return $this;
    }
    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return TradeEnddivideRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return TradeEnddivideRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets hmac
     *
     * @return string
     */
    public function getHmac()
    {
        return $this->hmac;
    }

    /**
     * Sets hmac
     *
     * @param string $hmac
     * @return TradeEnddivideRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeEnddivide';
    }


}
