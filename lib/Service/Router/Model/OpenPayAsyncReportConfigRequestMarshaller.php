<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OpenPayAsyncReportConfigRequestMarshaller implements RequestMarshaller
{
    /**
     * @var OpenPayAsyncReportConfigRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenPayAsyncReportConfigRequestMarshaller();
    }

    /**
     * @return OpenPayAsyncReportConfigRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/router/open-pay-async-report/config';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OpenPayAsyncReportConfigRequest $request
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
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getTradeAuthorizationDirectories() != null){
            $internalRequest->addParameter('tradeAuthorizationDirectories', ObjectSerializer::sanitizeForSerialization($request->getTradeAuthorizationDirectories(), 'string'));
        }
        if($request->getWxpMerAppId() != null){
            $internalRequest->addParameter('wxpMerAppId', ObjectSerializer::sanitizeForSerialization($request->getWxpMerAppId(), 'string'));
        }
        if($request->getSenceType() != null){
            $internalRequest->addParameter('senceType', ObjectSerializer::sanitizeForSerialization($request->getSenceType(), 'string'));
        }
        if($request->getCallBackUrl() != null){
            $internalRequest->addParameter('callBackUrl', ObjectSerializer::sanitizeForSerialization($request->getCallBackUrl(), 'string'));
        }
        if($request->getChannelNo() != null){
            $internalRequest->addParameter('channelNo', ObjectSerializer::sanitizeForSerialization($request->getChannelNo(), 'string'));
        }
        if($request->getPromotionTypeEnum() != null){
            $internalRequest->addParameter('promotionTypeEnum', ObjectSerializer::sanitizeForSerialization($request->getPromotionTypeEnum(), 'string'));
        }
        if(!empty($request->getChannelIds())){
            foreach ($request->getChannelIds() as $value){
                $internalRequest->addParameter('channelIds', ObjectSerializer::sanitizeForSerialization($value, 'string'));
            }
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OpenPayAsyncReportConfigRequestMarshaller::__init();
