<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MerchantQuaInfoSupplementRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MerchantQuaInfoSupplementRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQuaInfoSupplementRequestMarshaller();
    }

    /**
     * @return MerchantQuaInfoSupplementRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/sys/merchant/qua-info-supplement';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param MerchantQuaInfoSupplementRequest $request
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
        if($request->getFileInfo() != null){
            $internalRequest->addParameter('fileInfo', ObjectSerializer::sanitizeForSerialization($request->getFileInfo(), 'string'));
        }
        if($request->getMerNo() != null){
            $internalRequest->addParameter('merNo', ObjectSerializer::sanitizeForSerialization($request->getMerNo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
MerchantQuaInfoSupplementRequestMarshaller::__init();
