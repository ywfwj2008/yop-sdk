<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeOrderRequest extends BaseRequest
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
    private $industryParamExt;
    /**
     * @var string
     */
    private $riskParamExt;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $hmac;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $csUrl;
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
    private $siSubsidyMerchantAmout;
    /**
     * @var string
     */
    private $queryParamsExt;

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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
     */
    public function setPaymentParamExt($paymentParamExt)
    {
        $this->paymentParamExt = $paymentParamExt;
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
     */
    public function setRiskParamExt($riskParamExt)
    {
        $this->riskParamExt = $riskParamExt;
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
     * @return TradeOrderRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
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
     * @return TradeOrderRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
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
     * @return TradeOrderRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
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
     * @return TradeOrderRequest
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
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
     * @return TradeOrderRequest
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
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
     * @return TradeOrderRequest
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
     * @return TradeOrderRequest
     */
    public function setTimeoutNotifyUrl($timeoutNotifyUrl)
    {
        $this->timeoutNotifyUrl = $timeoutNotifyUrl;
        return $this;
    }
    /**
     * Gets siSubsidyMerchantAmout
     *
     * @return string
     */
    public function getSiSubsidyMerchantAmout()
    {
        return $this->siSubsidyMerchantAmout;
    }

    /**
     * Sets siSubsidyMerchantAmout
     *
     * @param string $siSubsidyMerchantAmout
     * @return TradeOrderRequest
     */
    public function setSiSubsidyMerchantAmout($siSubsidyMerchantAmout)
    {
        $this->siSubsidyMerchantAmout = $siSubsidyMerchantAmout;
        return $this;
    }
    /**
     * Gets queryParamsExt
     *
     * @return string
     */
    public function getQueryParamsExt()
    {
        return $this->queryParamsExt;
    }

    /**
     * Sets queryParamsExt
     *
     * @param string $queryParamsExt
     * @return TradeOrderRequest
     */
    public function setQueryParamsExt($queryParamsExt)
    {
        $this->queryParamsExt = $queryParamsExt;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeOrder';
    }


}
