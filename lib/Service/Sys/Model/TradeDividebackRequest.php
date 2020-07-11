<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeDividebackRequest extends BaseRequest
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
    private $divideRequestId;
    /**
     * @var string
     */
    private $divideBackRequestId;
    /**
     * @var string
     */
    private $divideBackDetail;
    /**
     * @var string
     */
    private $notifyUrl;
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
     * @return TradeDividebackRequest
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
     * @return TradeDividebackRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets divideRequestId
     *
     * @return string
     */
    public function getDivideRequestId()
    {
        return $this->divideRequestId;
    }

    /**
     * Sets divideRequestId
     *
     * @param string $divideRequestId
     * @return TradeDividebackRequest
     */
    public function setDivideRequestId($divideRequestId)
    {
        $this->divideRequestId = $divideRequestId;
        return $this;
    }
    /**
     * Gets divideBackRequestId
     *
     * @return string
     */
    public function getDivideBackRequestId()
    {
        return $this->divideBackRequestId;
    }

    /**
     * Sets divideBackRequestId
     *
     * @param string $divideBackRequestId
     * @return TradeDividebackRequest
     */
    public function setDivideBackRequestId($divideBackRequestId)
    {
        $this->divideBackRequestId = $divideBackRequestId;
        return $this;
    }
    /**
     * Gets divideBackDetail
     *
     * @return string
     */
    public function getDivideBackDetail()
    {
        return $this->divideBackDetail;
    }

    /**
     * Sets divideBackDetail
     *
     * @param string $divideBackDetail
     * @return TradeDividebackRequest
     */
    public function setDivideBackDetail($divideBackDetail)
    {
        $this->divideBackDetail = $divideBackDetail;
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
     * @return TradeDividebackRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return TradeDividebackRequest
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
     * @return TradeDividebackRequest
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
     * @return TradeDividebackRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeDivideback';
    }


}
