<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BindcardRequestRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BindcardRequestRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardRequestRequestMarshaller();
    }

    /**
     * @return BindcardRequestRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Frontcashier';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/frontcashier/bindcard/request';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BindcardRequestRequest $request
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
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getMerchantFlowId() != null){
            $internalRequest->addParameter('merchantFlowId', ObjectSerializer::sanitizeForSerialization($request->getMerchantFlowId(), 'string'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getUserName() != null){
            $internalRequest->addParameter('userName', ObjectSerializer::sanitizeForSerialization($request->getUserName(), 'string'));
        }
        if($request->getIdCardNo() != null){
            $internalRequest->addParameter('idCardNo', ObjectSerializer::sanitizeForSerialization($request->getIdCardNo(), 'string'));
        }
        if($request->getPhone() != null){
            $internalRequest->addParameter('phone', ObjectSerializer::sanitizeForSerialization($request->getPhone(), 'string'));
        }
        if($request->getCvv2() != null){
            $internalRequest->addParameter('cvv2', ObjectSerializer::sanitizeForSerialization($request->getCvv2(), 'string'));
        }
        if($request->getValidthru() != null){
            $internalRequest->addParameter('validthru', ObjectSerializer::sanitizeForSerialization($request->getValidthru(), 'string'));
        }
        if($request->getRiskParamExt() != null){
            $internalRequest->addParameter('riskParamExt', ObjectSerializer::sanitizeForSerialization($request->getRiskParamExt(), 'string'));
        }
        if($request->getOrderValidate() != null){
            $internalRequest->addParameter('orderValidate', ObjectSerializer::sanitizeForSerialization($request->getOrderValidate(), 'int', 'int32'));
        }
        if($request->getAuthType() != null){
            $internalRequest->addParameter('authType', ObjectSerializer::sanitizeForSerialization($request->getAuthType(), 'string'));
        }
        if($request->getEmpower() != null){
            $internalRequest->addParameter('empower', ObjectSerializer::sanitizeForSerialization($request->getEmpower(), 'bool'));
        }
        if($request->getCardType() != null){
            $internalRequest->addParameter('cardType', ObjectSerializer::sanitizeForSerialization($request->getCardType(), 'string'));
        }
        if($request->getIsSMS() != null){
            $internalRequest->addParameter('isSMS', ObjectSerializer::sanitizeForSerialization($request->getIsSMS(), 'bool'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BindcardRequestRequestMarshaller::__init();
