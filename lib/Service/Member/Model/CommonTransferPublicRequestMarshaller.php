<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CommonTransferPublicRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CommonTransferPublicRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonTransferPublicRequestMarshaller();
    }

    /**
     * @return CommonTransferPublicRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/member/common/transfer/public';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CommonTransferPublicRequest $request
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
        if($request->getOrderNo() != null){
            $internalRequest->addParameter('orderNo', ObjectSerializer::sanitizeForSerialization($request->getOrderNo(), 'string'));
        }
        if($request->getPlatformUserNo() != null){
            $internalRequest->addParameter('platformUserNo', ObjectSerializer::sanitizeForSerialization($request->getPlatformUserNo(), 'string'));
        }
        if($request->getTargetPlatformUserNo() != null){
            $internalRequest->addParameter('targetPlatformUserNo', ObjectSerializer::sanitizeForSerialization($request->getTargetPlatformUserNo(), 'string'));
        }
        if($request->getAmount() != null){
            $internalRequest->addParameter('amount', ObjectSerializer::sanitizeForSerialization($request->getAmount(), 'string'));
        }
        if($request->getNeedCalFee() != null){
            $internalRequest->addParameter('needCalFee', ObjectSerializer::sanitizeForSerialization($request->getNeedCalFee(), 'bool'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CommonTransferPublicRequestMarshaller::__init();
