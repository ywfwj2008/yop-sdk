<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class SubcompanyTradeOrderRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bizSystemNo;
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
    private $orderAmount;
    /**
     * @var int
     */
    private $timeoutExpress;
    /**
     * @var string
     */
    private $timeoutExpressType;
    /**
     * @var string
     */
    private $requestDate;
    /**
     * @var string
     */
    private $redirectUrl;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $assureType;
    /**
     * @var string
     */
    private $assurePeriod;
    /**
     * @var string
     */
    private $goodsParamExt;
    /**
     * @var string
     */
    private $paymentParamExt;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $industryParamExt;
    /**
     * @var string
     */
    private $riskParamExt;
    /**
     * @var string
     */
    private $csUrl;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $settleProcessType;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $divideNotifyUrl;
    /**
     * @var string
     */
    private $timeoutNotifyUrl;
    /**
     * @var string
     */
    private $hmac;

    /**
     * Gets bizSystemNo
     *
     * @return string
     */
    public function getBizSystemNo()
    {
        return $this->bizSystemNo;
    }

    /**
     * Sets bizSystemNo
     *
     * @param string $bizSystemNo
     * @return SubcompanyTradeOrderRequest
     */
    public function setBizSystemNo($bizSystemNo)
    {
        $this->bizSystemNo = $bizSystemNo;
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
     * @return SubcompanyTradeOrderRequest
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
     * @return SubcompanyTradeOrderRequest
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
     * @return SubcompanyTradeOrderRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return string
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param string $orderAmount
     * @return SubcompanyTradeOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets timeoutExpress
     *
     * @return int
     */
    public function getTimeoutExpress()
    {
        return $this->timeoutExpress;
    }

    /**
     * Sets timeoutExpress
     *
     * @param int $timeoutExpress
     * @return SubcompanyTradeOrderRequest
     */
    public function setTimeoutExpress($timeoutExpress)
    {
        $this->timeoutExpress = $timeoutExpress;
        return $this;
    }
    /**
     * Gets timeoutExpressType
     *
     * @return string
     */
    public function getTimeoutExpressType()
    {
        return $this->timeoutExpressType;
    }

    /**
     * Sets timeoutExpressType
     *
     * @param string $timeoutExpressType
     * @return SubcompanyTradeOrderRequest
     */
    public function setTimeoutExpressType($timeoutExpressType)
    {
        $this->timeoutExpressType = $timeoutExpressType;
        return $this;
    }
    /**
     * Gets requestDate
     *
     * @return string
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * Sets requestDate
     *
     * @param string $requestDate
     * @return SubcompanyTradeOrderRequest
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;
        return $this;
    }
    /**
     * Gets redirectUrl
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * Sets redirectUrl
     *
     * @param string $redirectUrl
     * @return SubcompanyTradeOrderRequest
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
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
     * @return SubcompanyTradeOrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets assureType
     *
     * @return string
     */
    public function getAssureType()
    {
        return $this->assureType;
    }

    /**
     * Sets assureType
     *
     * @param string $assureType
     * @return SubcompanyTradeOrderRequest
     */
    public function setAssureType($assureType)
    {
        $this->assureType = $assureType;
        return $this;
    }
    /**
     * Gets assurePeriod
     *
     * @return string
     */
    public function getAssurePeriod()
    {
        return $this->assurePeriod;
    }

    /**
     * Sets assurePeriod
     *
     * @param string $assurePeriod
     * @return SubcompanyTradeOrderRequest
     */
    public function setAssurePeriod($assurePeriod)
    {
        $this->assurePeriod = $assurePeriod;
        return $this;
    }
    /**
     * Gets goodsParamExt
     *
     * @return string
     */
    public function getGoodsParamExt()
    {
        return $this->goodsParamExt;
    }

    /**
     * Sets goodsParamExt
     *
     * @param string $goodsParamExt
     * @return SubcompanyTradeOrderRequest
     */
    public function setGoodsParamExt($goodsParamExt)
    {
        $this->goodsParamExt = $goodsParamExt;
        return $this;
    }
    /**
     * Gets paymentParamExt
     *
     * @return string
     */
    public function getPaymentParamExt()
    {
        return $this->paymentParamExt;
    }

    /**
     * Sets paymentParamExt
     *
     * @param string $paymentParamExt
     * @return SubcompanyTradeOrderRequest
     */
    public function setPaymentParamExt($paymentParamExt)
    {
        $this->paymentParamExt = $paymentParamExt;
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
     * @return SubcompanyTradeOrderRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets industryParamExt
     *
     * @return string
     */
    public function getIndustryParamExt()
    {
        return $this->industryParamExt;
    }

    /**
     * Sets industryParamExt
     *
     * @param string $industryParamExt
     * @return SubcompanyTradeOrderRequest
     */
    public function setIndustryParamExt($industryParamExt)
    {
        $this->industryParamExt = $industryParamExt;
        return $this;
    }
    /**
     * Gets riskParamExt
     *
     * @return string
     */
    public function getRiskParamExt()
    {
        return $this->riskParamExt;
    }

    /**
     * Sets riskParamExt
     *
     * @param string $riskParamExt
     * @return SubcompanyTradeOrderRequest
     */
    public function setRiskParamExt($riskParamExt)
    {
        $this->riskParamExt = $riskParamExt;
        return $this;
    }
    /**
     * Gets csUrl
     *
     * @return string
     */
    public function getCsUrl()
    {
        return $this->csUrl;
    }

    /**
     * Sets csUrl
     *
     * @param string $csUrl
     * @return SubcompanyTradeOrderRequest
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return SubcompanyTradeOrderRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets settleProcessType
     *
     * @return string
     */
    public function getSettleProcessType()
    {
        return $this->settleProcessType;
    }

    /**
     * Sets settleProcessType
     *
     * @param string $settleProcessType
     * @return SubcompanyTradeOrderRequest
     */
    public function setSettleProcessType($settleProcessType)
    {
        $this->settleProcessType = $settleProcessType;
        return $this;
    }
    /**
     * Gets divideDetail
     *
     * @return string
     */
    public function getDivideDetail()
    {
        return $this->divideDetail;
    }

    /**
     * Sets divideDetail
     *
     * @param string $divideDetail
     * @return SubcompanyTradeOrderRequest
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
        return $this;
    }
    /**
     * Gets divideNotifyUrl
     *
     * @return string
     */
    public function getDivideNotifyUrl()
    {
        return $this->divideNotifyUrl;
    }

    /**
     * Sets divideNotifyUrl
     *
     * @param string $divideNotifyUrl
     * @return SubcompanyTradeOrderRequest
     */
    public function setDivideNotifyUrl($divideNotifyUrl)
    {
        $this->divideNotifyUrl = $divideNotifyUrl;
        return $this;
    }
    /**
     * Gets timeoutNotifyUrl
     *
     * @return string
     */
    public function getTimeoutNotifyUrl()
    {
        return $this->timeoutNotifyUrl;
    }

    /**
     * Sets timeoutNotifyUrl
     *
     * @param string $timeoutNotifyUrl
     * @return SubcompanyTradeOrderRequest
     */
    public function setTimeoutNotifyUrl($timeoutNotifyUrl)
    {
        $this->timeoutNotifyUrl = $timeoutNotifyUrl;
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
     * @return SubcompanyTradeOrderRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }

    public static function getOperationId()
    {
        return 'subcompanyTradeOrder';
    }


}
