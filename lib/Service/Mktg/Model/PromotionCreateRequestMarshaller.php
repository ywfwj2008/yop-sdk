<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class PromotionCreateRequestMarshaller implements RequestMarshaller
{
    /**
     * @var PromotionCreateRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromotionCreateRequestMarshaller();
    }

    /**
     * @return PromotionCreateRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mktg';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/mktg/promotion/create';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param PromotionCreateRequest $request
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
        if($request->getPromotionType() != null){
            $internalRequest->addParameter('promotionType', ObjectSerializer::sanitizeForSerialization($request->getPromotionType(), 'string'));
        }
        if($request->getActivityId() != null){
            $internalRequest->addParameter('activityId', ObjectSerializer::sanitizeForSerialization($request->getActivityId(), 'string'));
        }
        if($request->getSubsidySource() != null){
            $internalRequest->addParameter('subsidySource', ObjectSerializer::sanitizeForSerialization($request->getSubsidySource(), 'string'));
        }
        if($request->getSubsidyType() != null){
            $internalRequest->addParameter('subsidyType', ObjectSerializer::sanitizeForSerialization($request->getSubsidyType(), 'string'));
        }
        if($request->getStatus() != null){
            $internalRequest->addParameter('status', ObjectSerializer::sanitizeForSerialization($request->getStatus(), 'string'));
        }
        if($request->getDiscountAmount() != null){
            $internalRequest->addParameter('discountAmount', ObjectSerializer::sanitizeForSerialization($request->getDiscountAmount(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
PromotionCreateRequestMarshaller::__init();
