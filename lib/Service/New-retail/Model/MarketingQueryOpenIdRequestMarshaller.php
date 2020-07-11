<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MarketingQueryOpenIdRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MarketingQueryOpenIdRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MarketingQueryOpenIdRequestMarshaller();
    }

    /**
     * @return MarketingQueryOpenIdRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/new-retail/marketing/query-open-id';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param MarketingQueryOpenIdRequest $request
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
        if($request->getMerNo() != null){
            $internalRequest->addParameter('merNo', ObjectSerializer::sanitizeForSerialization($request->getMerNo(), 'string'));
        }
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getAuthCode() != null){
            $internalRequest->addParameter('authCode', ObjectSerializer::sanitizeForSerialization($request->getAuthCode(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
MarketingQueryOpenIdRequestMarshaller::__init();
