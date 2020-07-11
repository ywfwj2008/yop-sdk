<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TradeOrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var TradeOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderRequestMarshaller();
    }

    /**
     * @return TradeOrderRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/sys/trade/order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param TradeOrderRequest $request
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
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'string'));
        }
        if($request->getTimeoutExpress() != null){
            $internalRequest->addParameter('timeoutExpress', ObjectSerializer::sanitizeForSerialization($request->getTimeoutExpress(), 'int', 'int32'));
        }
        if($request->getTimeoutExpressType() != null){
            $internalRequest->addParameter('timeoutExpressType', ObjectSerializer::sanitizeForSerialization($request->getTimeoutExpressType(), 'string'));
        }
        if($request->getRequestDate() != null){
            $internalRequest->addParameter('requestDate', ObjectSerializer::sanitizeForSerialization($request->getRequestDate(), 'string'));
        }
        if($request->getRedirectUrl() != null){
            $internalRequest->addParameter('redirectUrl', ObjectSerializer::sanitizeForSerialization($request->getRedirectUrl(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getAssureType() != null){
            $internalRequest->addParameter('assureType', ObjectSerializer::sanitizeForSerialization($request->getAssureType(), 'string'));
        }
        if($request->getAssurePeriod() != null){
            $internalRequest->addParameter('assurePeriod', ObjectSerializer::sanitizeForSerialization($request->getAssurePeriod(), 'string'));
        }
        if($request->getGoodsParamExt() != null){
            $internalRequest->addParameter('goodsParamExt', ObjectSerializer::sanitizeForSerialization($request->getGoodsParamExt(), 'string'));
        }
        if($request->getPaymentParamExt() != null){
            $internalRequest->addParameter('paymentParamExt', ObjectSerializer::sanitizeForSerialization($request->getPaymentParamExt(), 'string'));
        }
        if($request->getIndustryParamExt() != null){
            $internalRequest->addParameter('industryParamExt', ObjectSerializer::sanitizeForSerialization($request->getIndustryParamExt(), 'string'));
        }
        if($request->getRiskParamExt() != null){
            $internalRequest->addParameter('riskParamExt', ObjectSerializer::sanitizeForSerialization($request->getRiskParamExt(), 'string'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getFundProcessType() != null){
            $internalRequest->addParameter('fundProcessType', ObjectSerializer::sanitizeForSerialization($request->getFundProcessType(), 'string'));
        }
        if($request->getHmac() != null){
            $internalRequest->addParameter('hmac', ObjectSerializer::sanitizeForSerialization($request->getHmac(), 'string'));
        }
        if($request->getDivideDetail() != null){
            $internalRequest->addParameter('divideDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if($request->getCsUrl() != null){
            $internalRequest->addParameter('csUrl', ObjectSerializer::sanitizeForSerialization($request->getCsUrl(), 'string'));
        }
        if($request->getDivideNotifyUrl() != null){
            $internalRequest->addParameter('divideNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getDivideNotifyUrl(), 'string'));
        }
        if($request->getTimeoutNotifyUrl() != null){
            $internalRequest->addParameter('timeoutNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getTimeoutNotifyUrl(), 'string'));
        }
        if($request->getSiSubsidyMerchantAmout() != null){
            $internalRequest->addParameter('siSubsidyMerchantAmout', ObjectSerializer::sanitizeForSerialization($request->getSiSubsidyMerchantAmout(), 'string'));
        }
        if($request->getQueryParamsExt() != null){
            $internalRequest->addParameter('queryParamsExt', ObjectSerializer::sanitizeForSerialization($request->getQueryParamsExt(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
TradeOrderRequestMarshaller::__init();
