<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ApiPayRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ApiPayRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApiPayRequestMarshaller();
    }

    /**
     * @return ApiPayRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Nccashierapi';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/nccashierapi/api/pay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ApiPayRequest $request
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
        if($request->getPayTool() != null){
            $internalRequest->addParameter('payTool', ObjectSerializer::sanitizeForSerialization($request->getPayTool(), 'string'));
        }
        if($request->getPayType() != null){
            $internalRequest->addParameter('payType', ObjectSerializer::sanitizeForSerialization($request->getPayType(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getOpenId() != null){
            $internalRequest->addParameter('openId', ObjectSerializer::sanitizeForSerialization($request->getOpenId(), 'string'));
        }
        if($request->getVersion() != null){
            $internalRequest->addParameter('version', ObjectSerializer::sanitizeForSerialization($request->getVersion(), 'string'));
        }
        if($request->getPayEmpowerNo() != null){
            $internalRequest->addParameter('payEmpowerNo', ObjectSerializer::sanitizeForSerialization($request->getPayEmpowerNo(), 'string'));
        }
        if($request->getMerchantTerminalId() != null){
            $internalRequest->addParameter('merchantTerminalId', ObjectSerializer::sanitizeForSerialization($request->getMerchantTerminalId(), 'string'));
        }
        if($request->getMerchantStoreNo() != null){
            $internalRequest->addParameter('merchantStoreNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantStoreNo(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getExtParamMap() != null){
            $internalRequest->addParameter('extParamMap', ObjectSerializer::sanitizeForSerialization($request->getExtParamMap(), 'string'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ApiPayRequestMarshaller::__init();
