<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ApiOrderpayRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ApiOrderpayRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApiOrderpayRequestMarshaller();
    }

    /**
     * @return ApiOrderpayRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Nccashierapi';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/nccashierapi/api/orderpay';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ApiOrderpayRequest $request
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
            $internalRequest->addParameter('timeoutExpress', ObjectSerializer::sanitizeForSerialization($request->getTimeoutExpress(), 'string'));
        }
        if($request->getTimeoutExpressType() != null){
            $internalRequest->addParameter('timeoutExpressType', ObjectSerializer::sanitizeForSerialization($request->getTimeoutExpressType(), 'string'));
        }
        if($request->getRequestDate() != null){
            $internalRequest->addParameter('requestDate', ObjectSerializer::sanitizeForSerialization($request->getRequestDate(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getGoodsParamExt() != null){
            $internalRequest->addParameter('goodsParamExt', ObjectSerializer::sanitizeForSerialization($request->getGoodsParamExt(), 'string'));
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
        if($request->getPayTool() != null){
            $internalRequest->addParameter('payTool', ObjectSerializer::sanitizeForSerialization($request->getPayTool(), 'string'));
        }
        if($request->getPayType() != null){
            $internalRequest->addParameter('payType', ObjectSerializer::sanitizeForSerialization($request->getPayType(), 'string'));
        }
        if($request->getAppId() != null){
            $internalRequest->addParameter('appId', ObjectSerializer::sanitizeForSerialization($request->getAppId(), 'string'));
        }
        if($request->getOpenId() != null){
            $internalRequest->addParameter('openId', ObjectSerializer::sanitizeForSerialization($request->getOpenId(), 'string'));
        }
        if($request->getMerchantTerminalId() != null){
            $internalRequest->addParameter('merchantTerminalId', ObjectSerializer::sanitizeForSerialization($request->getMerchantTerminalId(), 'string'));
        }
        if($request->getPayEmpowerNo() != null){
            $internalRequest->addParameter('payEmpowerNo', ObjectSerializer::sanitizeForSerialization($request->getPayEmpowerNo(), 'string'));
        }
        if($request->getMerchantStoreNo() != null){
            $internalRequest->addParameter('merchantStoreNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantStoreNo(), 'string'));
        }
        if($request->getUserIp() != null){
            $internalRequest->addParameter('userIp', ObjectSerializer::sanitizeForSerialization($request->getUserIp(), 'string'));
        }
        if($request->getExtParamMap() != null){
            $internalRequest->addParameter('extParamMap', ObjectSerializer::sanitizeForSerialization($request->getExtParamMap(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ApiOrderpayRequestMarshaller::__init();
