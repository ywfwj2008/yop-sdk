<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeRefundqueryRequest extends BaseRequest
{
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
    private $orderId;
    /**
     * @var string
     */
    private $refundRequestId;
    /**
     * @var string
     */
    private $uniqueRefundNo;
    /**
     * @var string
     */
    private $hmac;

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
     * @return TradeRefundqueryRequest
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
     * @return TradeRefundqueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return TradeRefundqueryRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets refundRequestId
     *
     * @return string
     */
    public function getRefundRequestId()
    {
        return $this->refundRequestId;
    }

    /**
     * Sets refundRequestId
     *
     * @param string $refundRequestId
     * @return TradeRefundqueryRequest
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
        return $this;
    }
    /**
     * Gets uniqueRefundNo
     *
     * @return string
     */
    public function getUniqueRefundNo()
    {
        return $this->uniqueRefundNo;
    }

    /**
     * Sets uniqueRefundNo
     *
     * @param string $uniqueRefundNo
     * @return TradeRefundqueryRequest
     */
    public function setUniqueRefundNo($uniqueRefundNo)
    {
        $this->uniqueRefundNo = $uniqueRefundNo;
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
     * @return TradeRefundqueryRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeRefundquery';
    }


}
