<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class BindpayRequestRequestMarshaller implements RequestMarshaller
{
    /**
     * @var BindpayRequestRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpayRequestRequestMarshaller();
    }

    /**
     * @return BindpayRequestRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/frontcashier/bindpay/request';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param BindpayRequestRequest $request
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
        if($request->getPayMerchantNo() != null){
            $internalRequest->addParameter('payMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getPayMerchantNo(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'string'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getVersion() != null){
            $internalRequest->addParameter('version', ObjectSerializer::sanitizeForSerialization($request->getVersion(), 'string'));
        }
        if($request->getExtParamMap() != null){
            $internalRequest->addParameter('extParamMap', ObjectSerializer::sanitizeForSerialization($request->getExtParamMap(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
BindpayRequestRequestMarshaller::__init();
