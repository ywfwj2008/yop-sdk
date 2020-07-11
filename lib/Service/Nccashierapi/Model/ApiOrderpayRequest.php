<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class ApiOrderpayRequest extends BaseRequest
{
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
     * @var string
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
    private $notifyUrl;
    /**
     * @var string
     */
    private $goodsParamExt;
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
    private $payTool;
    /**
     * @var string
     */
    private $payType;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $openId;
    /**
     * @var string
     */
    private $merchantTerminalId;
    /**
     * @var string
     */
    private $payEmpowerNo;
    /**
     * @var string
     */
    private $merchantStoreNo;
    /**
     * @var string
     */
    private $userIp;
    /**
     * @var string
     */
    private $extParamMap;

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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets timeoutExpress
     *
     * @return string
     */
    public function getTimeoutExpress()
    {
        return $this->timeoutExpress;
    }

    /**
     * Sets timeoutExpress
     *
     * @param string $timeoutExpress
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
     */
    public function setRequestDate($requestDate)
    {
        $this->requestDate = $requestDate;
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
     * @return ApiOrderpayRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return ApiOrderpayRequest
     */
    public function setGoodsParamExt($goodsParamExt)
    {
        $this->goodsParamExt = $goodsParamExt;
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
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
     * @return ApiOrderpayRequest
     */
    public function setTimeoutNotifyUrl($timeoutNotifyUrl)
    {
        $this->timeoutNotifyUrl = $timeoutNotifyUrl;
        return $this;
    }
    /**
     * Gets payTool
     *
     * @return string
     */
    public function getPayTool()
    {
        return $this->payTool;
    }

    /**
     * Sets payTool
     *
     * @param string $payTool
     * @return ApiOrderpayRequest
     */
    public function setPayTool($payTool)
    {
        $this->payTool = $payTool;
        return $this;
    }
    /**
     * Gets payType
     *
     * @return string
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Sets payType
     *
     * @param string $payType
     * @return ApiOrderpayRequest
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
        return $this;
    }
    /**
     * Gets appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets appId
     *
     * @param string $appId
     * @return ApiOrderpayRequest
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * Gets openId
     *
     * @return string
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * Sets openId
     *
     * @param string $openId
     * @return ApiOrderpayRequest
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
        return $this;
    }
    /**
     * Gets merchantTerminalId
     *
     * @return string
     */
    public function getMerchantTerminalId()
    {
        return $this->merchantTerminalId;
    }

    /**
     * Sets merchantTerminalId
     *
     * @param string $merchantTerminalId
     * @return ApiOrderpayRequest
     */
    public function setMerchantTerminalId($merchantTerminalId)
    {
        $this->merchantTerminalId = $merchantTerminalId;
        return $this;
    }
    /**
     * Gets payEmpowerNo
     *
     * @return string
     */
    public function getPayEmpowerNo()
    {
        return $this->payEmpowerNo;
    }

    /**
     * Sets payEmpowerNo
     *
     * @param string $payEmpowerNo
     * @return ApiOrderpayRequest
     */
    public function setPayEmpowerNo($payEmpowerNo)
    {
        $this->payEmpowerNo = $payEmpowerNo;
        return $this;
    }
    /**
     * Gets merchantStoreNo
     *
     * @return string
     */
    public function getMerchantStoreNo()
    {
        return $this->merchantStoreNo;
    }

    /**
     * Sets merchantStoreNo
     *
     * @param string $merchantStoreNo
     * @return ApiOrderpayRequest
     */
    public function setMerchantStoreNo($merchantStoreNo)
    {
        $this->merchantStoreNo = $merchantStoreNo;
        return $this;
    }
    /**
     * Gets userIp
     *
     * @return string
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Sets userIp
     *
     * @param string $userIp
     * @return ApiOrderpayRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets extParamMap
     *
     * @return string
     */
    public function getExtParamMap()
    {
        return $this->extParamMap;
    }

    /**
     * Sets extParamMap
     *
     * @param string $extParamMap
     * @return ApiOrderpayRequest
     */
    public function setExtParamMap($extParamMap)
    {
        $this->extParamMap = $extParamMap;
        return $this;
    }

    public static function getOperationId()
    {
        return 'apiOrderpay';
    }


}
