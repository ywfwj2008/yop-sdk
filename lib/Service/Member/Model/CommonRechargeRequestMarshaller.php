<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CommonRechargeRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CommonRechargeRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonRechargeRequestMarshaller();
    }

    /**
     * @return CommonRechargeRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/member/common/recharge';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CommonRechargeRequest $request
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
        if($request->getRequestId() != null){
            $internalRequest->addParameter('requestId', ObjectSerializer::sanitizeForSerialization($request->getRequestId(), 'string'));
        }
        if($request->getPlatformUserNo() != null){
            $internalRequest->addParameter('platformUserNo', ObjectSerializer::sanitizeForSerialization($request->getPlatformUserNo(), 'string'));
        }
        if($request->getOrderNo() != null){
            $internalRequest->addParameter('orderNo', ObjectSerializer::sanitizeForSerialization($request->getOrderNo(), 'string'));
        }
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'string'));
        }
        if($request->getAmount() != null){
            $internalRequest->addParameter('amount', ObjectSerializer::sanitizeForSerialization($request->getAmount(), 'string'));
        }
        if($request->getExtendRiskInfo() != null){
            $internalRequest->addParameter('extendRiskInfo', ObjectSerializer::sanitizeForSerialization($request->getExtendRiskInfo(), 'string'));
        }
        if($request->getDirectPayType() != null){
            $internalRequest->addParameter('directPayType', ObjectSerializer::sanitizeForSerialization($request->getDirectPayType(), 'string'));
        }
        if($request->getProductName() != null){
            $internalRequest->addParameter('productName', ObjectSerializer::sanitizeForSerialization($request->getProductName(), 'string'));
        }
        if($request->getSaleProductCode() != null){
            $internalRequest->addParameter('saleProductCode', ObjectSerializer::sanitizeForSerialization($request->getSaleProductCode(), 'string'));
        }
        if($request->getNotifyURL() != null){
            $internalRequest->addParameter('notifyURL', ObjectSerializer::sanitizeForSerialization($request->getNotifyURL(), 'string'));
        }
        if($request->getFrontCallBackUrl() != null){
            $internalRequest->addParameter('frontCallBackUrl', ObjectSerializer::sanitizeForSerialization($request->getFrontCallBackUrl(), 'string'));
        }
        if($request->getPlatformName() != null){
            $internalRequest->addParameter('platformName', ObjectSerializer::sanitizeForSerialization($request->getPlatformName(), 'string'));
        }
        if($request->getIsYeepayCheck() != null){
            $internalRequest->addParameter('isYeepayCheck', ObjectSerializer::sanitizeForSerialization($request->getIsYeepayCheck(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CommonRechargeRequestMarshaller::__init();
