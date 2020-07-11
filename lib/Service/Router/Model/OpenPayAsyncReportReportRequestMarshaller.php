<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OpenPayAsyncReportReportRequestMarshaller implements RequestMarshaller
{
    /**
     * @var OpenPayAsyncReportReportRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenPayAsyncReportReportRequestMarshaller();
    }

    /**
     * @return OpenPayAsyncReportReportRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Router';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/router/open-pay-async-report/report';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OpenPayAsyncReportReportRequest $request
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
        if($request->getCallBackUrl() != null){
            $internalRequest->addParameter('callBackUrl', ObjectSerializer::sanitizeForSerialization($request->getCallBackUrl(), 'string'));
        }
        if($request->getChannelCode() != null){
            $internalRequest->addParameter('channelCode', ObjectSerializer::sanitizeForSerialization($request->getChannelCode(), 'string'));
        }
        if($request->getMerchantName() != null){
            $internalRequest->addParameter('merchantName', ObjectSerializer::sanitizeForSerialization($request->getMerchantName(), 'string'));
        }
        if($request->getReportMerchantName() != null){
            $internalRequest->addParameter('reportMerchantName', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantName(), 'string'));
        }
        if($request->getReportMerchantAlias() != null){
            $internalRequest->addParameter('reportMerchantAlias', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantAlias(), 'string'));
        }
        if($request->getReportMerchantComment() != null){
            $internalRequest->addParameter('reportMerchantComment', ObjectSerializer::sanitizeForSerialization($request->getReportMerchantComment(), 'string'));
        }
        if($request->getServiceTel() != null){
            $internalRequest->addParameter('serviceTel', ObjectSerializer::sanitizeForSerialization($request->getServiceTel(), 'string'));
        }
        if($request->getContactName() != null){
            $internalRequest->addParameter('contactName', ObjectSerializer::sanitizeForSerialization($request->getContactName(), 'string'));
        }
        if($request->getContactPhone() != null){
            $internalRequest->addParameter('contactPhone', ObjectSerializer::sanitizeForSerialization($request->getContactPhone(), 'string'));
        }
        if($request->getContactMobile() != null){
            $internalRequest->addParameter('contactMobile', ObjectSerializer::sanitizeForSerialization($request->getContactMobile(), 'string'));
        }
        if($request->getContactEmail() != null){
            $internalRequest->addParameter('contactEmail', ObjectSerializer::sanitizeForSerialization($request->getContactEmail(), 'string'));
        }
        if($request->getInstitutionCode() != null){
            $internalRequest->addParameter('institutionCode', ObjectSerializer::sanitizeForSerialization($request->getInstitutionCode(), 'string'));
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
        if($request->getMerchantLicenseNo() != null){
            $internalRequest->addParameter('merchantLicenseNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantLicenseNo(), 'string'));
        }
        if($request->getCorporateIdCardNo() != null){
            $internalRequest->addParameter('corporateIdCardNo', ObjectSerializer::sanitizeForSerialization($request->getCorporateIdCardNo(), 'string'));
        }
        if($request->getContactType() != null){
            $internalRequest->addParameter('contactType', ObjectSerializer::sanitizeForSerialization($request->getContactType(), 'string'));
        }
        if($request->getReportInfosJsonStr() != null){
            $internalRequest->addParameter('reportInfosJsonStr', ObjectSerializer::sanitizeForSerialization($request->getReportInfosJsonStr(), 'string'));
        }
        if($request->getReportFeeType() != null){
            $internalRequest->addParameter('reportFeeType', ObjectSerializer::sanitizeForSerialization($request->getReportFeeType(), 'string'));
        }
        if(!empty($request->getPromotionType())){
            foreach ($request->getPromotionType() as $value){
                $internalRequest->addParameter('promotionType', ObjectSerializer::sanitizeForSerialization($value, 'string'));
            }
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OpenPayAsyncReportReportRequestMarshaller::__init();
