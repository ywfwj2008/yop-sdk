<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TradeMultiorderqueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var TradeMultiorderqueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeMultiorderqueryRequestMarshaller();
    }

    /**
     * @return TradeMultiorderqueryRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Sys';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/sys/trade/multiorderquery';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param TradeMultiorderqueryRequest $request
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
        if($request->getStatus() != null){
            $internalRequest->addParameter('status', ObjectSerializer::sanitizeForSerialization($request->getStatus(), 'string'));
        }
        if($request->getRequestDateBegin() != null){
            $internalRequest->addParameter('requestDateBegin', ObjectSerializer::sanitizeForSerialization($request->getRequestDateBegin(), 'string'));
        }
        if($request->getRequestDateEnd() != null){
            $internalRequest->addParameter('requestDateEnd', ObjectSerializer::sanitizeForSerialization($request->getRequestDateEnd(), 'string'));
        }
        if($request->getPageNo() != null){
            $internalRequest->addParameter('pageNo', ObjectSerializer::sanitizeForSerialization($request->getPageNo(), 'string'));
        }
        if($request->getPageSize() != null){
            $internalRequest->addParameter('pageSize', ObjectSerializer::sanitizeForSerialization($request->getPageSize(), 'string'));
        }
        if($request->getHmac() != null){
            $internalRequest->addParameter('hmac', ObjectSerializer::sanitizeForSerialization($request->getHmac(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
TradeMultiorderqueryRequestMarshaller::__init();
