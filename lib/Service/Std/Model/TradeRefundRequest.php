<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeRefundRequest extends BaseRequest
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
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $refundAmount;
    /**
     * @var string
     */
    private $accountDivided;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $refundAccountType;

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
     * @return TradeRefundRequest
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
     * @return TradeRefundRequest
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
     * @return TradeRefundRequest
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
     * @return TradeRefundRequest
     */
    public function setRefundRequestId($refundRequestId)
    {
        $this->refundRequestId = $refundRequestId;
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
     * @return TradeRefundRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets refundAmount
     *
     * @return string
     */
    public function getRefundAmount()
    {
        return $this->refundAmount;
    }

    /**
     * Sets refundAmount
     *
     * @param string $refundAmount
     * @return TradeRefundRequest
     */
    public function setRefundAmount($refundAmount)
    {
        $this->refundAmount = $refundAmount;
        return $this;
    }
    /**
     * Gets accountDivided
     *
     * @return string
     */
    public function getAccountDivided()
    {
        return $this->accountDivided;
    }

    /**
     * Sets accountDivided
     *
     * @param string $accountDivided
     * @return TradeRefundRequest
     */
    public function setAccountDivided($accountDivided)
    {
        $this->accountDivided = $accountDivided;
        return $this;
    }
    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets description
     *
     * @param string $description
     * @return TradeRefundRequest
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return TradeRefundRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return TradeRefundRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets refundAccountType
     *
     * @return string
     */
    public function getRefundAccountType()
    {
        return $this->refundAccountType;
    }

    /**
     * Sets refundAccountType
     *
     * @param string $refundAccountType
     * @return TradeRefundRequest
     */
    public function setRefundAccountType($refundAccountType)
    {
        $this->refundAccountType = $refundAccountType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeRefund';
    }


}
