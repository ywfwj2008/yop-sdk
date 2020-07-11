<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MarketingApplyPublicRequest extends BaseRequest
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
    private $requestNo;
    /**
     * @var string
     */
    private $callBackUrl;
    /**
     * @var string
     */
    private $promotionType;
    /**
     * @var string
     */
    private $merAccNo;
    /**
     * @var string
     */
    private $merAccName;
    /**
     * @var string
     */
    private $merAccBankName;
    /**
     * @var string
     */
    private $merAccBankCode;
    /**
     * @var string
     */
    private $merAccPhone;
    /**
     * @var string
     */
    private $merAccBankProvince;
    /**
     * @var string
     */
    private $merAccBankCity;
    /**
     * @var string
     */
    private $picPerWithId;
    /**
     * @var string
     */
    private $picOpenPermit;
    /**
     * @var string
     */
    private $picSupplement;
    /**
     * @var string
     */
    private $picShopInside;
    /**
     * @var string
     */
    private $picCashier;
    /**
     * @var string
     */
    private $picPlatform;
    /**
     * @var string
     */
    private $picAtaMaterial;
    /**
     * @var string
     */
    private $merchantLicensePicUrl;
    /**
     * @var string
     */
    private $merchantLicenseNo;
    /**
     * @var string
     */
    private $merchantShopPicUrl;
    /**
     * @var string
     */
    private $externalId;
    /**
     * @var string
     */
    private $appKey;
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
    private $secondCategoryCode;
    /**
     * @var string
     */
    private $contactType;
    /**
     * @var string
     */
    private $merchantType;
    /**
     * @var string
     */
    private $picCertificateFile;
    /**
     * @var string
     */
    private $picDiplomaticNote;
    /**
     * @var string
     */
    private $picPrivateNonenterpriseUnits;
    /**
     * @var string
     */
    private $picChargeSample;
    /**
     * @var string
     */
    private $picMedicalInstrumentPracticeLicense;
    /**
     * @var string
     */
    private $picLegalPersonRegistration;
    /**
     * @var string
     */
    private $picOrgCert;
    /**
     * @var string
     */
    private $picRunSchoolLicense;
    /**
     * @var string
     */
    private $picLegalPerson;
    /**
     * @var string
     */
    private $picInstitutionalOrganization;

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
     * @return MarketingApplyPublicRequest
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
     * @return MarketingApplyPublicRequest
     */
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return MarketingApplyPublicRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return MarketingApplyPublicRequest
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl = $callBackUrl;
        return $this;
    }
    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType
     * @return MarketingApplyPublicRequest
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
        return $this;
    }
    /**
     * Gets merAccNo
     *
     * @return string
     */
    public function getMerAccNo()
    {
        return $this->merAccNo;
    }

    /**
     * Sets merAccNo
     *
     * @param string $merAccNo
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccNo($merAccNo)
    {
        $this->merAccNo = $merAccNo;
        return $this;
    }
    /**
     * Gets merAccName
     *
     * @return string
     */
    public function getMerAccName()
    {
        return $this->merAccName;
    }

    /**
     * Sets merAccName
     *
     * @param string $merAccName
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccName($merAccName)
    {
        $this->merAccName = $merAccName;
        return $this;
    }
    /**
     * Gets merAccBankName
     *
     * @return string
     */
    public function getMerAccBankName()
    {
        return $this->merAccBankName;
    }

    /**
     * Sets merAccBankName
     *
     * @param string $merAccBankName
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccBankName($merAccBankName)
    {
        $this->merAccBankName = $merAccBankName;
        return $this;
    }
    /**
     * Gets merAccBankCode
     *
     * @return string
     */
    public function getMerAccBankCode()
    {
        return $this->merAccBankCode;
    }

    /**
     * Sets merAccBankCode
     *
     * @param string $merAccBankCode
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccBankCode($merAccBankCode)
    {
        $this->merAccBankCode = $merAccBankCode;
        return $this;
    }
    /**
     * Gets merAccPhone
     *
     * @return string
     */
    public function getMerAccPhone()
    {
        return $this->merAccPhone;
    }

    /**
     * Sets merAccPhone
     *
     * @param string $merAccPhone
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccPhone($merAccPhone)
    {
        $this->merAccPhone = $merAccPhone;
        return $this;
    }
    /**
     * Gets merAccBankProvince
     *
     * @return string
     */
    public function getMerAccBankProvince()
    {
        return $this->merAccBankProvince;
    }

    /**
     * Sets merAccBankProvince
     *
     * @param string $merAccBankProvince
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccBankProvince($merAccBankProvince)
    {
        $this->merAccBankProvince = $merAccBankProvince;
        return $this;
    }
    /**
     * Gets merAccBankCity
     *
     * @return string
     */
    public function getMerAccBankCity()
    {
        return $this->merAccBankCity;
    }

    /**
     * Sets merAccBankCity
     *
     * @param string $merAccBankCity
     * @return MarketingApplyPublicRequest
     */
    public function setMerAccBankCity($merAccBankCity)
    {
        $this->merAccBankCity = $merAccBankCity;
        return $this;
    }
    /**
     * Gets picPerWithId
     *
     * @return string
     */
    public function getPicPerWithId()
    {
        return $this->picPerWithId;
    }

    /**
     * Sets picPerWithId
     *
     * @param string $picPerWithId
     * @return MarketingApplyPublicRequest
     */
    public function setPicPerWithId($picPerWithId)
    {
        $this->picPerWithId = $picPerWithId;
        return $this;
    }
    /**
     * Gets picOpenPermit
     *
     * @return string
     */
    public function getPicOpenPermit()
    {
        return $this->picOpenPermit;
    }

    /**
     * Sets picOpenPermit
     *
     * @param string $picOpenPermit
     * @return MarketingApplyPublicRequest
     */
    public function setPicOpenPermit($picOpenPermit)
    {
        $this->picOpenPermit = $picOpenPermit;
        return $this;
    }
    /**
     * Gets picSupplement
     *
     * @return string
     */
    public function getPicSupplement()
    {
        return $this->picSupplement;
    }

    /**
     * Sets picSupplement
     *
     * @param string $picSupplement
     * @return MarketingApplyPublicRequest
     */
    public function setPicSupplement($picSupplement)
    {
        $this->picSupplement = $picSupplement;
        return $this;
    }
    /**
     * Gets picShopInside
     *
     * @return string
     */
    public function getPicShopInside()
    {
        return $this->picShopInside;
    }

    /**
     * Sets picShopInside
     *
     * @param string $picShopInside
     * @return MarketingApplyPublicRequest
     */
    public function setPicShopInside($picShopInside)
    {
        $this->picShopInside = $picShopInside;
        return $this;
    }
    /**
     * Gets picCashier
     *
     * @return string
     */
    public function getPicCashier()
    {
        return $this->picCashier;
    }

    /**
     * Sets picCashier
     *
     * @param string $picCashier
     * @return MarketingApplyPublicRequest
     */
    public function setPicCashier($picCashier)
    {
        $this->picCashier = $picCashier;
        return $this;
    }
    /**
     * Gets picPlatform
     *
     * @return string
     */
    public function getPicPlatform()
    {
        return $this->picPlatform;
    }

    /**
     * Sets picPlatform
     *
     * @param string $picPlatform
     * @return MarketingApplyPublicRequest
     */
    public function setPicPlatform($picPlatform)
    {
        $this->picPlatform = $picPlatform;
        return $this;
    }
    /**
     * Gets picAtaMaterial
     *
     * @return string
     */
    public function getPicAtaMaterial()
    {
        return $this->picAtaMaterial;
    }

    /**
     * Sets picAtaMaterial
     *
     * @param string $picAtaMaterial
     * @return MarketingApplyPublicRequest
     */
    public function setPicAtaMaterial($picAtaMaterial)
    {
        $this->picAtaMaterial = $picAtaMaterial;
        return $this;
    }
    /**
     * Gets merchantLicensePicUrl
     *
     * @return string
     */
    public function getMerchantLicensePicUrl()
    {
        return $this->merchantLicensePicUrl;
    }

    /**
     * Sets merchantLicensePicUrl
     *
     * @param string $merchantLicensePicUrl
     * @return MarketingApplyPublicRequest
     */
    public function setMerchantLicensePicUrl($merchantLicensePicUrl)
    {
        $this->merchantLicensePicUrl = $merchantLicensePicUrl;
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
     * @return MarketingApplyPublicRequest
     */
    public function setMerchantLicenseNo($merchantLicenseNo)
    {
        $this->merchantLicenseNo = $merchantLicenseNo;
        return $this;
    }
    /**
     * Gets merchantShopPicUrl
     *
     * @return string
     */
    public function getMerchantShopPicUrl()
    {
        return $this->merchantShopPicUrl;
    }

    /**
     * Sets merchantShopPicUrl
     *
     * @param string $merchantShopPicUrl
     * @return MarketingApplyPublicRequest
     */
    public function setMerchantShopPicUrl($merchantShopPicUrl)
    {
        $this->merchantShopPicUrl = $merchantShopPicUrl;
        return $this;
    }
    /**
     * Gets externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Sets externalId
     *
     * @param string $externalId
     * @return MarketingApplyPublicRequest
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * Gets appKey
     *
     * @return string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * Sets appKey
     *
     * @param string $appKey
     * @return MarketingApplyPublicRequest
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
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
     * @return MarketingApplyPublicRequest
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
     * @return MarketingApplyPublicRequest
     */
    public function setReportMerchantAlias($reportMerchantAlias)
    {
        $this->reportMerchantAlias = $reportMerchantAlias;
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
     * @return MarketingApplyPublicRequest
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
     * @return MarketingApplyPublicRequest
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
     * @return MarketingApplyPublicRequest
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
     * @return MarketingApplyPublicRequest
     */
    public function setMerchantDistrict($merchantDistrict)
    {
        $this->merchantDistrict = $merchantDistrict;
        return $this;
    }
    /**
     * Gets secondCategoryCode
     *
     * @return string
     */
    public function getSecondCategoryCode()
    {
        return $this->secondCategoryCode;
    }

    /**
     * Sets secondCategoryCode
     *
     * @param string $secondCategoryCode
     * @return MarketingApplyPublicRequest
     */
    public function setSecondCategoryCode($secondCategoryCode)
    {
        $this->secondCategoryCode = $secondCategoryCode;
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
     * @return MarketingApplyPublicRequest
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;
        return $this;
    }
    /**
     * Gets merchantType
     *
     * @return string
     */
    public function getMerchantType()
    {
        return $this->merchantType;
    }

    /**
     * Sets merchantType
     *
     * @param string $merchantType
     * @return MarketingApplyPublicRequest
     */
    public function setMerchantType($merchantType)
    {
        $this->merchantType = $merchantType;
        return $this;
    }
    /**
     * Gets picCertificateFile
     *
     * @return string
     */
    public function getPicCertificateFile()
    {
        return $this->picCertificateFile;
    }

    /**
     * Sets picCertificateFile
     *
     * @param string $picCertificateFile
     * @return MarketingApplyPublicRequest
     */
    public function setPicCertificateFile($picCertificateFile)
    {
        $this->picCertificateFile = $picCertificateFile;
        return $this;
    }
    /**
     * Gets picDiplomaticNote
     *
     * @return string
     */
    public function getPicDiplomaticNote()
    {
        return $this->picDiplomaticNote;
    }

    /**
     * Sets picDiplomaticNote
     *
     * @param string $picDiplomaticNote
     * @return MarketingApplyPublicRequest
     */
    public function setPicDiplomaticNote($picDiplomaticNote)
    {
        $this->picDiplomaticNote = $picDiplomaticNote;
        return $this;
    }
    /**
     * Gets picPrivateNonenterpriseUnits
     *
     * @return string
     */
    public function getPicPrivateNonenterpriseUnits()
    {
        return $this->picPrivateNonenterpriseUnits;
    }

    /**
     * Sets picPrivateNonenterpriseUnits
     *
     * @param string $picPrivateNonenterpriseUnits
     * @return MarketingApplyPublicRequest
     */
    public function setPicPrivateNonenterpriseUnits($picPrivateNonenterpriseUnits)
    {
        $this->picPrivateNonenterpriseUnits = $picPrivateNonenterpriseUnits;
        return $this;
    }
    /**
     * Gets picChargeSample
     *
     * @return string
     */
    public function getPicChargeSample()
    {
        return $this->picChargeSample;
    }

    /**
     * Sets picChargeSample
     *
     * @param string $picChargeSample
     * @return MarketingApplyPublicRequest
     */
    public function setPicChargeSample($picChargeSample)
    {
        $this->picChargeSample = $picChargeSample;
        return $this;
    }
    /**
     * Gets picMedicalInstrumentPracticeLicense
     *
     * @return string
     */
    public function getPicMedicalInstrumentPracticeLicense()
    {
        return $this->picMedicalInstrumentPracticeLicense;
    }

    /**
     * Sets picMedicalInstrumentPracticeLicense
     *
     * @param string $picMedicalInstrumentPracticeLicense
     * @return MarketingApplyPublicRequest
     */
    public function setPicMedicalInstrumentPracticeLicense($picMedicalInstrumentPracticeLicense)
    {
        $this->picMedicalInstrumentPracticeLicense = $picMedicalInstrumentPracticeLicense;
        return $this;
    }
    /**
     * Gets picLegalPersonRegistration
     *
     * @return string
     */
    public function getPicLegalPersonRegistration()
    {
        return $this->picLegalPersonRegistration;
    }

    /**
     * Sets picLegalPersonRegistration
     *
     * @param string $picLegalPersonRegistration
     * @return MarketingApplyPublicRequest
     */
    public function setPicLegalPersonRegistration($picLegalPersonRegistration)
    {
        $this->picLegalPersonRegistration = $picLegalPersonRegistration;
        return $this;
    }
    /**
     * Gets picOrgCert
     *
     * @return string
     */
    public function getPicOrgCert()
    {
        return $this->picOrgCert;
    }

    /**
     * Sets picOrgCert
     *
     * @param string $picOrgCert
     * @return MarketingApplyPublicRequest
     */
    public function setPicOrgCert($picOrgCert)
    {
        $this->picOrgCert = $picOrgCert;
        return $this;
    }
    /**
     * Gets picRunSchoolLicense
     *
     * @return string
     */
    public function getPicRunSchoolLicense()
    {
        return $this->picRunSchoolLicense;
    }

    /**
     * Sets picRunSchoolLicense
     *
     * @param string $picRunSchoolLicense
     * @return MarketingApplyPublicRequest
     */
    public function setPicRunSchoolLicense($picRunSchoolLicense)
    {
        $this->picRunSchoolLicense = $picRunSchoolLicense;
        return $this;
    }
    /**
     * Gets picLegalPerson
     *
     * @return string
     */
    public function getPicLegalPerson()
    {
        return $this->picLegalPerson;
    }

    /**
     * Sets picLegalPerson
     *
     * @param string $picLegalPerson
     * @return MarketingApplyPublicRequest
     */
    public function setPicLegalPerson($picLegalPerson)
    {
        $this->picLegalPerson = $picLegalPerson;
        return $this;
    }
    /**
     * Gets picInstitutionalOrganization
     *
     * @return string
     */
    public function getPicInstitutionalOrganization()
    {
        return $this->picInstitutionalOrganization;
    }

    /**
     * Sets picInstitutionalOrganization
     *
     * @param string $picInstitutionalOrganization
     * @return MarketingApplyPublicRequest
     */
    public function setPicInstitutionalOrganization($picInstitutionalOrganization)
    {
        $this->picInstitutionalOrganization = $picInstitutionalOrganization;
        return $this;
    }

    public static function getOperationId()
    {
        return 'marketingApplyPublic';
    }


}
