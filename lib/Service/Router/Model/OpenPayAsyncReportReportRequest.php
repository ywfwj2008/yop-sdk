<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class OpenPayAsyncReportReportRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $channelNo;
    /**
     * @var string
     */
    private $callBackUrl;
    /**
     * @var string
     */
    private $channelCode;
    /**
     * @var string
     */
    private $merchantName;
    /**
     * @var string
     */
    private $reportMerchantName;
    /**
     * @var string
     */
    private $reportMerchantAlias;
    /**
     * @var string
     */
    private $reportMerchantComment;
    /**
     * @var string
     */
    private $serviceTel;
    /**
     * @var string
     */
    private $contactName;
    /**
     * @var string
     */
    private $contactPhone;
    /**
     * @var string
     */
    private $contactMobile;
    /**
     * @var string
     */
    private $contactEmail;
    /**
     * @var string
     */
    private $institutionCode;
    /**
     * @var string
     */
    private $merchantAddress;
    /**
     * @var string
     */
    private $merchantProvince;
    /**
     * @var string
     */
    private $merchantCity;
    /**
     * @var string
     */
    private $merchantDistrict;
    /**
     * @var string
     */
    private $merchantLicenseNo;
    /**
     * @var string
     */
    private $corporateIdCardNo;
    /**
     * @var string
     */
    private $contactType;
    /**
     * @var string
     */
    private $reportInfosJsonStr;
    /**
     * @var string
     */
    private $reportFeeType;
    /**
     * @var array|string
     */
    private $promotionType;

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
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets channelNo
     *
     * @return string
     */
    public function getChannelNo()
    {
        return $this->channelNo;
    }

    /**
     * Sets channelNo
     *
     * @param string $channelNo
     * @return OpenPayAsyncReportReportRequest
     */
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;
        return $this;
    }
    /**
     * Gets callBackUrl
     *
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->callBackUrl;
    }

    /**
     * Sets callBackUrl
     *
     * @param string $callBackUrl
     * @return OpenPayAsyncReportReportRequest
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl = $callBackUrl;
        return $this;
    }
    /**
     * Gets channelCode
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets channelCode
     *
     * @param string $channelCode
     * @return OpenPayAsyncReportReportRequest
     */
    public function setChannelCode($channelCode)
    {
        $this->channelCode = $channelCode;
        return $this;
    }
    /**
     * Gets merchantName
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Sets merchantName
     *
     * @param string $merchantName
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
        return $this;
    }
    /**
     * Gets reportMerchantName
     *
     * @return string
     */
    public function getReportMerchantName()
    {
        return $this->reportMerchantName;
    }

    /**
     * Sets reportMerchantName
     *
     * @param string $reportMerchantName
     * @return OpenPayAsyncReportReportRequest
     */
    public function setReportMerchantName($reportMerchantName)
    {
        $this->reportMerchantName = $reportMerchantName;
        return $this;
    }
    /**
     * Gets reportMerchantAlias
     *
     * @return string
     */
    public function getReportMerchantAlias()
    {
        return $this->reportMerchantAlias;
    }

    /**
     * Sets reportMerchantAlias
     *
     * @param string $reportMerchantAlias
     * @return OpenPayAsyncReportReportRequest
     */
    public function setReportMerchantAlias($reportMerchantAlias)
    {
        $this->reportMerchantAlias = $reportMerchantAlias;
        return $this;
    }
    /**
     * Gets reportMerchantComment
     *
     * @return string
     */
    public function getReportMerchantComment()
    {
        return $this->reportMerchantComment;
    }

    /**
     * Sets reportMerchantComment
     *
     * @param string $reportMerchantComment
     * @return OpenPayAsyncReportReportRequest
     */
    public function setReportMerchantComment($reportMerchantComment)
    {
        $this->reportMerchantComment = $reportMerchantComment;
        return $this;
    }
    /**
     * Gets serviceTel
     *
     * @return string
     */
    public function getServiceTel()
    {
        return $this->serviceTel;
    }

    /**
     * Sets serviceTel
     *
     * @param string $serviceTel
     * @return OpenPayAsyncReportReportRequest
     */
    public function setServiceTel($serviceTel)
    {
        $this->serviceTel = $serviceTel;
        return $this;
    }
    /**
     * Gets contactName
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets contactName
     *
     * @param string $contactName
     * @return OpenPayAsyncReportReportRequest
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }
    /**
     * Gets contactPhone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Sets contactPhone
     *
     * @param string $contactPhone
     * @return OpenPayAsyncReportReportRequest
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }
    /**
     * Gets contactMobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * Sets contactMobile
     *
     * @param string $contactMobile
     * @return OpenPayAsyncReportReportRequest
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile = $contactMobile;
        return $this;
    }
    /**
     * Gets contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Sets contactEmail
     *
     * @param string $contactEmail
     * @return OpenPayAsyncReportReportRequest
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }
    /**
     * Gets institutionCode
     *
     * @return string
     */
    public function getInstitutionCode()
    {
        return $this->institutionCode;
    }

    /**
     * Sets institutionCode
     *
     * @param string $institutionCode
     * @return OpenPayAsyncReportReportRequest
     */
    public function setInstitutionCode($institutionCode)
    {
        $this->institutionCode = $institutionCode;
        return $this;
    }
    /**
     * Gets merchantAddress
     *
     * @return string
     */
    public function getMerchantAddress()
    {
        return $this->merchantAddress;
    }

    /**
     * Sets merchantAddress
     *
     * @param string $merchantAddress
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantAddress($merchantAddress)
    {
        $this->merchantAddress = $merchantAddress;
        return $this;
    }
    /**
     * Gets merchantProvince
     *
     * @return string
     */
    public function getMerchantProvince()
    {
        return $this->merchantProvince;
    }

    /**
     * Sets merchantProvince
     *
     * @param string $merchantProvince
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantProvince($merchantProvince)
    {
        $this->merchantProvince = $merchantProvince;
        return $this;
    }
    /**
     * Gets merchantCity
     *
     * @return string
     */
    public function getMerchantCity()
    {
        return $this->merchantCity;
    }

    /**
     * Sets merchantCity
     *
     * @param string $merchantCity
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantCity($merchantCity)
    {
        $this->merchantCity = $merchantCity;
        return $this;
    }
    /**
     * Gets merchantDistrict
     *
     * @return string
     */
    public function getMerchantDistrict()
    {
        return $this->merchantDistrict;
    }

    /**
     * Sets merchantDistrict
     *
     * @param string $merchantDistrict
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantDistrict($merchantDistrict)
    {
        $this->merchantDistrict = $merchantDistrict;
        return $this;
    }
    /**
     * Gets merchantLicenseNo
     *
     * @return string
     */
    public function getMerchantLicenseNo()
    {
        return $this->merchantLicenseNo;
    }

    /**
     * Sets merchantLicenseNo
     *
     * @param string $merchantLicenseNo
     * @return OpenPayAsyncReportReportRequest
     */
    public function setMerchantLicenseNo($merchantLicenseNo)
    {
        $this->merchantLicenseNo = $merchantLicenseNo;
        return $this;
    }
    /**
     * Gets corporateIdCardNo
     *
     * @return string
     */
    public function getCorporateIdCardNo()
    {
        return $this->corporateIdCardNo;
    }

    /**
     * Sets corporateIdCardNo
     *
     * @param string $corporateIdCardNo
     * @return OpenPayAsyncReportReportRequest
     */
    public function setCorporateIdCardNo($corporateIdCardNo)
    {
        $this->corporateIdCardNo = $corporateIdCardNo;
        return $this;
    }
    /**
     * Gets contactType
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Sets contactType
     *
     * @param string $contactType
     * @return OpenPayAsyncReportReportRequest
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }
    /**
     * Gets reportInfosJsonStr
     *
     * @return string
     */
    public function getReportInfosJsonStr()
    {
        return $this->reportInfosJsonStr;
    }

    /**
     * Sets reportInfosJsonStr
     *
     * @param string $reportInfosJsonStr
     * @return OpenPayAsyncReportReportRequest
     */
    public function setReportInfosJsonStr($reportInfosJsonStr)
    {
        $this->reportInfosJsonStr = $reportInfosJsonStr;
        return $this;
    }
    /**
     * Gets reportFeeType
     *
     * @return string
     */
    public function getReportFeeType()
    {
        return $this->reportFeeType;
    }

    /**
     * Sets reportFeeType
     *
     * @param string $reportFeeType
     * @return OpenPayAsyncReportReportRequest
     */
    public function setReportFeeType($reportFeeType)
    {
        $this->reportFeeType = $reportFeeType;
        return $this;
    }
    /**
     * Gets promotionType
     *
     * @return array|string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Sets promotionType
     *
     * @param array|string $promotionType
     * @return OpenPayAsyncReportReportRequest
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'openPayAsyncReportReport';
    }


}
