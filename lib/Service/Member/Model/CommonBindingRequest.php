<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonBindingRequest extends BaseRequest
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
    private $businessNo;
    /**
     * @var string
     */
    private $mobilePhone;
    /**
     * @var string
     */
    private $bankCardNum;
    /**
     * @var string
     */
    private $cvv2;
    /**
     * @var string
     */
    private $bindvalidthru;
    /**
     * @var string
     */
    private $isSmsVerify;
    /**
     * @var string
     */
    private $pageNotifyUrl;
    /**
     * @var string
     */
    private $saleProductCode;
    /**
     * @var string
     */
    private $smsTemplateId;

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
     * @return CommonBindingRequest
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
     * @return CommonBindingRequest
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
     * @return CommonBindingRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
        return $this;
    }
    /**
     * Gets businessNo
     *
     * @return string
     */
    public function getBusinessNo()
    {
        return $this->businessNo;
    }

    /**
     * Sets businessNo
     *
     * @param string $businessNo
     * @return CommonBindingRequest
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
        return $this;
    }
    /**
     * Gets mobilePhone
     *
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Sets mobilePhone
     *
     * @param string $mobilePhone
     * @return CommonBindingRequest
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }
    /**
     * Gets bankCardNum
     *
     * @return string
     */
    public function getBankCardNum()
    {
        return $this->bankCardNum;
    }

    /**
     * Sets bankCardNum
     *
     * @param string $bankCardNum
     * @return CommonBindingRequest
     */
    public function setBankCardNum($bankCardNum)
    {
        $this->bankCardNum = $bankCardNum;
        return $this;
    }
    /**
     * Gets cvv2
     *
     * @return string
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * Sets cvv2
     *
     * @param string $cvv2
     * @return CommonBindingRequest
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
    /**
     * Gets bindvalidthru
     *
     * @return string
     */
    public function getBindvalidthru()
    {
        return $this->bindvalidthru;
    }

    /**
     * Sets bindvalidthru
     *
     * @param string $bindvalidthru
     * @return CommonBindingRequest
     */
    public function setBindvalidthru($bindvalidthru)
    {
        $this->bindvalidthru = $bindvalidthru;
        return $this;
    }
    /**
     * Gets isSmsVerify
     *
     * @return string
     */
    public function getIsSmsVerify()
    {
        return $this->isSmsVerify;
    }

    /**
     * Sets isSmsVerify
     *
     * @param string $isSmsVerify
     * @return CommonBindingRequest
     */
    public function setIsSmsVerify($isSmsVerify)
    {
        $this->isSmsVerify = $isSmsVerify;
        return $this;
    }
    /**
     * Gets pageNotifyUrl
     *
     * @return string
     */
    public function getPageNotifyUrl()
    {
        return $this->pageNotifyUrl;
    }

    /**
     * Sets pageNotifyUrl
     *
     * @param string $pageNotifyUrl
     * @return CommonBindingRequest
     */
    public function setPageNotifyUrl($pageNotifyUrl)
    {
        $this->pageNotifyUrl = $pageNotifyUrl;
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
     * @return CommonBindingRequest
     */
    public function setSaleProductCode($saleProductCode)
    {
        $this->saleProductCode = $saleProductCode;
        return $this;
    }
    /**
     * Gets smsTemplateId
     *
     * @return string
     */
    public function getSmsTemplateId()
    {
        return $this->smsTemplateId;
    }

    /**
     * Sets smsTemplateId
     *
     * @param string $smsTemplateId
     * @return CommonBindingRequest
     */
    public function setSmsTemplateId($smsTemplateId)
    {
        $this->smsTemplateId = $smsTemplateId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonBinding';
    }


}
