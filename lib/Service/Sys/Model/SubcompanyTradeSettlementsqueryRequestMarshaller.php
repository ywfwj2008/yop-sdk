<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class SubcompanyTradeSettlementsqueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var SubcompanyTradeSettlementsqueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubcompanyTradeSettlementsqueryRequestMarshaller();
    }

    /**
     * @return SubcompanyTradeSettlementsqueryRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/sys/subcompany/trade/settlementsquery';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param SubcompanyTradeSettlementsqueryRequest $request
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
        if($request->getStartSettleDate() != null){
            $internalRequest->addParameter('startSettleDate', ObjectSerializer::sanitizeForSerialization($request->getStartSettleDate(), 'string'));
        }
        if($request->getEndSettleDate() != null){
            $internalRequest->addParameter('endSettleDate', ObjectSerializer::sanitizeForSerialization($request->getEndSettleDate(), 'string'));
        }
        if($request->getBizSystemNo() != null){
            $internalRequest->addParameter('bizSystemNo', ObjectSerializer::sanitizeForSerialization($request->getBizSystemNo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getHmac() != null){
            $internalRequest->addParameter('hmac', ObjectSerializer::sanitizeForSerialization($request->getHmac(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
SubcompanyTradeSettlementsqueryRequestMarshaller::__init();
