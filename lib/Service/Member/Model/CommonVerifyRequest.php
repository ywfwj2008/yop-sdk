<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonVerifyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $businessNo;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $certificateType;
    /**
     * @var string
     */
    private $credentialsNo;
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
    private $isBind;
    /**
     * @var bool
     */
    private $policeAuth;
    /**
     * @var bool
     */
    private $operatorAuth;
    /**
     * @var string
     */
    private $pageNotifyUrl;
    /**
     * @var string
     */
    private $isSmsVerify;
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
    private $saleProductCode;

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
     * @return CommonVerifyRequest
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
        return $this;
    }
    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name
     *
     * @param string $name
     * @return CommonVerifyRequest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets certificateType
     *
     * @return string
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets certificateType
     *
     * @param string $certificateType
     * @return CommonVerifyRequest
     */
    public function setCertificateType($certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }
    /**
     * Gets credentialsNo
     *
     * @return string
     */
    public function getCredentialsNo()
    {
        return $this->credentialsNo;
    }

    /**
     * Sets credentialsNo
     *
     * @param string $credentialsNo
     * @return CommonVerifyRequest
     */
    public function setCredentialsNo($credentialsNo)
    {
        $this->credentialsNo = $credentialsNo;
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
     * @return CommonVerifyRequest
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
     * @return CommonVerifyRequest
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
     * @return CommonVerifyRequest
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
     * @return CommonVerifyRequest
     */
    public function setBindvalidthru($bindvalidthru)
    {
        $this->bindvalidthru = $bindvalidthru;
        return $this;
    }
    /**
     * Gets isBind
     *
     * @return string
     */
    public function getIsBind()
    {
        return $this->isBind;
    }

    /**
     * Sets isBind
     *
     * @param string $isBind
     * @return CommonVerifyRequest
     */
    public function setIsBind($isBind)
    {
        $this->isBind = $isBind;
        return $this;
    }
    /**
     * Gets policeAuth
     *
     * @return bool
     */
    public function getPoliceAuth()
    {
        return $this->policeAuth;
    }

    /**
     * Sets policeAuth
     *
     * @param bool $policeAuth
     * @return CommonVerifyRequest
     */
    public function setPoliceAuth($policeAuth)
    {
        $this->policeAuth = $policeAuth;
        return $this;
    }
    /**
     * Gets operatorAuth
     *
     * @return bool
     */
    public function getOperatorAuth()
    {
        return $this->operatorAuth;
    }

    /**
     * Sets operatorAuth
     *
     * @param bool $operatorAuth
     * @return CommonVerifyRequest
     */
    public function setOperatorAuth($operatorAuth)
    {
        $this->operatorAuth = $operatorAuth;
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
     * @return CommonVerifyRequest
     */
    public function setPageNotifyUrl($pageNotifyUrl)
    {
        $this->pageNotifyUrl = $pageNotifyUrl;
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
     * @return CommonVerifyRequest
     */
    public function setIsSmsVerify($isSmsVerify)
    {
        $this->isSmsVerify = $isSmsVerify;
        return $this;
    }
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
     * @return CommonVerifyRequest
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
     * @return CommonVerifyRequest
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
     * @return CommonVerifyRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
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
     * @return CommonVerifyRequest
     */
    public function setSaleProductCode($saleProductCode)
    {
        $this->saleProductCode = $saleProductCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonVerify';
    }


}
