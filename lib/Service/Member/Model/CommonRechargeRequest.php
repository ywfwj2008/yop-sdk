<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonRechargeRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNo;
    /**
     * @var string
     */
    private $requestId;
    /**
     * @var string
     */
    private $platformUserNo;
    /**
     * @var string
     */
    private $orderNo;
    /**
     * @var string
     */
    private $bindId;
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $extendRiskInfo;
    /**
     * @var string
     */
    private $directPayType;
    /**
     * @var string
     */
    private $productName;
    /**
     * @var string
     */
    private $saleProductCode;
    /**
     * @var string
     */
    private $notifyURL;
    /**
     * @var string
     */
    private $frontCallBackUrl;
    /**
     * @var string
     */
    private $platformName;
    /**
     * @var string
     */
    private $isYeepayCheck;

    /**
     * Gets customerNo
     *
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * Sets customerNo
     *
     * @param string $customerNo
     * @return CommonRechargeRequest
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        return $this;
    }
    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId
     *
     * @param string $requestId
     * @return CommonRechargeRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Gets platformUserNo
     *
     * @return string
     */
    public function getPlatformUserNo()
    {
        return $this->platformUserNo;
    }

    /**
     * Sets platformUserNo
     *
     * @param string $platformUserNo
     * @return CommonRechargeRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
        return $this;
    }
    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo
     * @return CommonRechargeRequest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param string $bindId
     * @return CommonRechargeRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param string $amount
     * @return CommonRechargeRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets extendRiskInfo
     *
     * @return string
     */
    public function getExtendRiskInfo()
    {
        return $this->extendRiskInfo;
    }

    /**
     * Sets extendRiskInfo
     *
     * @param string $extendRiskInfo
     * @return CommonRechargeRequest
     */
    public function setExtendRiskInfo($extendRiskInfo)
    {
        $this->extendRiskInfo = $extendRiskInfo;
        return $this;
    }
    /**
     * Gets directPayType
     *
     * @return string
     */
    public function getDirectPayType()
    {
        return $this->directPayType;
    }

    /**
     * Sets directPayType
     *
     * @param string $directPayType
     * @return CommonRechargeRequest
     */
    public function setDirectPayType($directPayType)
    {
        $this->directPayType = $directPayType;
        return $this;
    }
    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets productName
     *
     * @param string $productName
     * @return CommonRechargeRequest
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }
    /**
     * Gets saleProductCode
     *
     * @return string
     */
    public function getSaleProductCode()
    {
        return $this->saleProductCode;
    }

    /**
     * Sets saleProductCode
     *
     * @param string $saleProductCode
     * @return CommonRechargeRequest
     */
    public function setSaleProductCode($saleProductCode)
    {
        $this->saleProductCode = $saleProductCode;
        return $this;
    }
    /**
     * Gets notifyURL
     *
     * @return string
     */
    public function getNotifyURL()
    {
        return $this->notifyURL;
    }

    /**
     * Sets notifyURL
     *
     * @param string $notifyURL
     * @return CommonRechargeRequest
     */
    public function setNotifyURL($notifyURL)
    {
        $this->notifyURL = $notifyURL;
        return $this;
    }
    /**
     * Gets frontCallBackUrl
     *
     * @return string
     */
    public function getFrontCallBackUrl()
    {
        return $this->frontCallBackUrl;
    }

    /**
     * Sets frontCallBackUrl
     *
     * @param string $frontCallBackUrl
     * @return CommonRechargeRequest
     */
    public function setFrontCallBackUrl($frontCallBackUrl)
    {
        $this->frontCallBackUrl = $frontCallBackUrl;
        return $this;
    }
    /**
     * Gets platformName
     *
     * @return string
     */
    public function getPlatformName()
    {
        return $this->platformName;
    }

    /**
     * Sets platformName
     *
     * @param string $platformName
     * @return CommonRechargeRequest
     */
    public function setPlatformName($platformName)
    {
        $this->platformName = $platformName;
        return $this;
    }
    /**
     * Gets isYeepayCheck
     *
     * @return string
     */
    public function getIsYeepayCheck()
    {
        return $this->isYeepayCheck;
    }

    /**
     * Sets isYeepayCheck
     *
     * @param string $isYeepayCheck
     * @return CommonRechargeRequest
     */
    public function setIsYeepayCheck($isYeepayCheck)
    {
        $this->isYeepayCheck = $isYeepayCheck;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonRecharge';
    }


}
