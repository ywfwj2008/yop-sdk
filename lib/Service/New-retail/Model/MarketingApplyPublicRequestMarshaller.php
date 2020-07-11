<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MarketingApplyPublicRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MarketingApplyPublicRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MarketingApplyPublicRequestMarshaller();
    }

    /**
     * @return MarketingApplyPublicRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'NewRetail';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/new-retail/marketing/apply/public';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param MarketingApplyPublicRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getChannelNo() != null){
            $internalRequest->addParameter('channelNo', ObjectSerializer::sanitizeForSerialization($request->getChannelNo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getCallBackUrl() != null){
            $internalRequest->addParameter('callBackUrl', ObjectSerializer::sanitizeForSerialization($request->getCallBackUrl(), 'string'));
        }
        if($request->getPromotionType() != null){
            $internalRequest->addParameter('promotionType', ObjectSerializer::sanitizeForSerialization($request->getPromotionType(), 'string'));
        }
        if($request->getMerAccNo() != null){
            $internalRequest->addParameter('merAccNo', ObjectSerializer::sanitizeForSerialization($request->getMerAccNo(), 'string'));
        }
        if($request->getMerAccName() != null){
            $internalRequest->addParameter('merAccName', ObjectSerializer::sanitizeForSerialization($request->getMerAccName(), 'string'));
        }
        if($request->getMerAccBankName() != null){
            $internalRequest->addParameter('merAccBankName', ObjectSerializer::sanitizeForSerialization($request->getMerAccBankName(), 'string'));
        }
        if($request->getMerAccBankCode() != null){
            $internalRequest->addParameter('merAccBankCode', ObjectSerializer::sanitizeForSerialization($request->getMerAccBankCode(), 'string'));
        }
        if($request->getMerAccPhone() != null){
            $internalRequest->addParameter('merAccPhone', ObjectSerializer::sanitizeForSerialization($request->getMerAccPhone(), 'string'));
        }
        if($request->getMerAccBankProvince() != null){
            $internalRequest->addParameter('merAccBankProvince', ObjectSerializer::sanitizeForSerialization($request->getMerAccBankProvince(), 'string'));
        }
        if($request->getMerAccBankCity() != null){
            $internalRequest->addParameter('merAccBankCity', ObjectSerializer::sanitizeForSerialization($request->getMerAccBankCity(), 'string'));
        }
        if($request->getPicPerWithId() != null){
            $internalRequest->addParameter('pic_per_with_id', ObjectSerializer::sanitizeForSerialization($request->getPicPerWithId(), 'string'));
        }
        if($request->getPicOpenPermit() != null){
            $internalRequest->addParameter('pic_open_permit', ObjectSerializer::sanitizeForSerialization($request->getPicOpenPermit(), 'string'));
        }
        if($request->getPicSupplement() != null){
            $internalRequest->addParameter('pic_supplement', ObjectSerializer::sanitizeForSerialization($request->getPicSupplement(), 'string'));
        }
        if($request->getPicShopInside() != null){
            $internalRequest->addParameter('pic_shop_inside', ObjectSerializer::sanitizeForSerialization($request->getPicShopInside(), 'string'));
        }
        if($request->getPicCashier() != null){
            $internalRequest->addParameter('pic_cashier', ObjectSerializer::sanitizeForSerialization($request->getPicCashier(), 'string'));
        }
        if($request->getPicPlatform() != null){
            $internalRequest->addParameter('pic_platform', ObjectSerializer::sanitizeForSerialization($request->getPicPlatform(), 'string'));
        }
        if($request->getPicAtaMaterial() != null){
            $internalRequest->addParameter('pic_ata_material', ObjectSerializer::sanitizeForSerialization($request->getPicAtaMaterial(), 'string'));
        }
        if($request->getMerchantLicensePicUrl() != null){
            $internalRequest->addParameter('merchantLicensePicUrl', ObjectSerializer::sanitizeForSerialization($request->getMerchantLicensePicUrl(), 'string'));
        }
        if($request->getMerchantLicenseNo() != null){
            $internalRequest->addParameter('merchantLicenseNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantLicenseNo(), 'string'));
        }
        if($request->getMerchantShopPicUrl() != null){
            $internalRequest->addParameter('merchantShopPicUrl', ObjectSerializer::sanitizeForSerialization($request->getMerchantShopPicUrl(), 'string'));
        }
        if($request->getExternalId() != null){
            $internalRequest->addParameter('external_id', ObjectSerializer::sanitizeForSerialization($request->getExternalId(), 'string'));
        }
        if($request->getAppKey() != null){
            $internalRequest->addParameter('appKey', ObjectSerializer::sanitizeForSerialization($request->getAppKey(), 'string'));
        }
        if($request->getReportMerchantName() != null){
            $internalRequest->addParameter('reportMerchantName', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantName(), 'string'));
        }
        if($request->getReportMerchantAlias() != null){
            $internalRequest->addParameter('reportMerchantAlias', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantAlias(), 'string'));
        }
        if($request->getMerchantAddress() != null){
            $internalRequest->addParameter('merchantAddress', ObjectSerializer::sanitizeForSerialization($request->getMerchantAddress(), 'string'));
        }
        if($request->getMerchantProvince() != null){
            $internalRequest->addParameter('merchantProvince', ObjectSerializer::sanitizeForSerialization($request->getMerchantProvince(), 'string'));
        }
        if($request->getMerchantCity() != null){
            $internalRequest->addParameter('merchantCity', ObjectSerializer::sanitizeForSerialization($request->getMerchantCity(), 'string'));
        }
        if($request->getMerchantDistrict() != null){
            $internalRequest->addParameter('merchantDistrict', ObjectSerializer::sanitizeForSerialization($request->getMerchantDistrict(), 'string'));
        }
        if($request->getSecondCategoryCode() != null){
            $internalRequest->addParameter('secondCategoryCode', ObjectSerializer::sanitizeForSerialization($request->getSecondCategoryCode(), 'string'));
        }
        if($request->getContactType() != null){
            $internalRequest->addParameter('contactType', ObjectSerializer::sanitizeForSerialization($request->getContactType(), 'string'));
        }
        if($request->getMerchantType() != null){
            $internalRequest->addParameter('merchantType', ObjectSerializer::sanitizeForSerialization($request->getMerchantType(), 'string'));
        }
        if($request->getPicCertificateFile() != null){
            $internalRequest->addParameter('pic_certificate_file', ObjectSerializer::sanitizeForSerialization($request->getPicCertificateFile(), 'string'));
        }
        if($request->getPicDiplomaticNote() != null){
            $internalRequest->addParameter('pic_diplomatic_note', ObjectSerializer::sanitizeForSerialization($request->getPicDiplomaticNote(), 'string'));
        }
        if($request->getPicPrivateNonenterpriseUnits() != null){
            $internalRequest->addParameter('pic_private_nonenterprise_units', ObjectSerializer::sanitizeForSerialization($request->getPicPrivateNonenterpriseUnits(), 'string'));
        }
        if($request->getPicChargeSample() != null){
            $internalRequest->addParameter('pic_charge_sample', ObjectSerializer::sanitizeForSerialization($request->getPicChargeSample(), 'string'));
        }
        if($request->getPicMedicalInstrumentPracticeLicense() != null){
            $internalRequest->addParameter('pic_medical_instrument_practice_license', ObjectSerializer::sanitizeForSerialization($request->getPicMedicalInstrumentPracticeLicense(), 'string'));
        }
        if($request->getPicLegalPersonRegistration() != null){
            $internalRequest->addParameter('pic_legal_person_registration', ObjectSerializer::sanitizeForSerialization($request->getPicLegalPersonRegistration(), 'string'));
        }
        if($request->getPicOrgCert() != null){
            $internalRequest->addParameter('pic_org_cert', ObjectSerializer::sanitizeForSerialization($request->getPicOrgCert(), 'string'));
        }
        if($request->getPicRunSchoolLicense() != null){
            $internalRequest->addParameter('pic_run_school_license', ObjectSerializer::sanitizeForSerialization($request->getPicRunSchoolLicense(), 'string'));
        }
        if($request->getPicLegalPerson() != null){
            $internalRequest->addParameter('pic_legal_person', ObjectSerializer::sanitizeForSerialization($request->getPicLegalPerson(), 'string'));
        }
        if($request->getPicInstitutionalOrganization() != null){
            $internalRequest->addParameter('pic_institutional_organization', ObjectSerializer::sanitizeForSerialization($request->getPicInstitutionalOrganization(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
MarketingApplyPublicRequestMarshaller::__init();
