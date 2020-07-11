<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class EntrustConfirmRequestMarshaller implements RequestMarshaller
{
    /**
     * @var EntrustConfirmRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustConfirmRequestMarshaller();
    }

    /**
     * @return EntrustConfirmRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/frontcashier/entrust/confirm';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param EntrustConfirmRequest $request
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
        if($request->getSmsCode() != null){
            $internalRequest->addParameter('smsCode', ObjectSerializer::sanitizeForSerialization($request->getSmsCode(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getMerchantFlowId() != null){
            $internalRequest->addParameter('merchantFlowId', ObjectSerializer::sanitizeForSerialization($request->getMerchantFlowId(), 'string'));
        }
        if($request->getOrderValidate() != null){
            $internalRequest->addParameter('orderValidate', ObjectSerializer::sanitizeForSerialization($request->getOrderValidate(), 'int', 'int32'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
EntrustConfirmRequestMarshaller::__init();
