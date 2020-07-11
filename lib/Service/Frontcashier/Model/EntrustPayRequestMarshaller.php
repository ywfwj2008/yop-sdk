<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class EntrustPayRequestMarshaller implements RequestMarshaller
{
    /**
     * @var EntrustPayRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustPayRequestMarshaller();
    }

    /**
     * @return EntrustPayRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/frontcashier/entrust/pay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param EntrustPayRequest $request
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
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'string'));
        }
        if($request->getCardNo() != null){
            $internalRequest->addParameter('cardNo', ObjectSerializer::sanitizeForSerialization($request->getCardNo(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getEntrustProtocolId() != null){
            $internalRequest->addParameter('entrustProtocolId', ObjectSerializer::sanitizeForSerialization($request->getEntrustProtocolId(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getVersion() != null){
            $internalRequest->addParameter('version', ObjectSerializer::sanitizeForSerialization($request->getVersion(), 'string'));
        }
        if($request->getMarketActivityNo() != null){
            $internalRequest->addParameter('marketActivityNo', ObjectSerializer::sanitizeForSerialization($request->getMarketActivityNo(), 'string'));
        }
        if($request->getAttendActivity() != null){
            $internalRequest->addParameter('attendActivity', ObjectSerializer::sanitizeForSerialization($request->getAttendActivity(), 'bool'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
EntrustPayRequestMarshaller::__init();
