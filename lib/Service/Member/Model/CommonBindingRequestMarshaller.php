<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CommonBindingRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CommonBindingRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonBindingRequestMarshaller();
    }

    /**
     * @return CommonBindingRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Member';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.1/member/common/binding';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CommonBindingRequest $request
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
        if($request->getCustomerNo() != null){
            $internalRequest->addParameter('customerNo', ObjectSerializer::sanitizeForSerialization($request->getCustomerNo(), 'string'));
        }
        if($request->getRequestId() != null){
            $internalRequest->addParameter('requestId', ObjectSerializer::sanitizeForSerialization($request->getRequestId(), 'string'));
        }
        if($request->getPlatformUserNo() != null){
            $internalRequest->addParameter('platformUserNo', ObjectSerializer::sanitizeForSerialization($request->getPlatformUserNo(), 'string'));
        }
        if($request->getBusinessNo() != null){
            $internalRequest->addParameter('businessNo', ObjectSerializer::sanitizeForSerialization($request->getBusinessNo(), 'string'));
        }
        if($request->getMobilePhone() != null){
            $internalRequest->addParameter('mobilePhone', ObjectSerializer::sanitizeForSerialization($request->getMobilePhone(), 'string'));
        }
        if($request->getBankCardNum() != null){
            $internalRequest->addParameter('bankCardNum', ObjectSerializer::sanitizeForSerialization($request->getBankCardNum(), 'string'));
        }
        if($request->getCvv2() != null){
            $internalRequest->addParameter('cvv2', ObjectSerializer::sanitizeForSerialization($request->getCvv2(), 'string'));
        }
        if($request->getBindvalidthru() != null){
            $internalRequest->addParameter('bindvalidthru', ObjectSerializer::sanitizeForSerialization($request->getBindvalidthru(), 'string'));
        }
        if($request->getIsSmsVerify() != null){
            $internalRequest->addParameter('isSmsVerify', ObjectSerializer::sanitizeForSerialization($request->getIsSmsVerify(), 'string'));
        }
        if($request->getPageNotifyUrl() != null){
            $internalRequest->addParameter('pageNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getPageNotifyUrl(), 'string', 'url'));
        }
        if($request->getSaleProductCode() != null){
            $internalRequest->addParameter('saleProductCode', ObjectSerializer::sanitizeForSerialization($request->getSaleProductCode(), 'string'));
        }
        if($request->getSmsTemplateId() != null){
            $internalRequest->addParameter('smsTemplateId', ObjectSerializer::sanitizeForSerialization($request->getSmsTemplateId(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CommonBindingRequestMarshaller::__init();
