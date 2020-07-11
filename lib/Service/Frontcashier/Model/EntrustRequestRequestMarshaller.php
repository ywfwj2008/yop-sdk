<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class EntrustRequestRequestMarshaller implements RequestMarshaller
{
    /**
     * @var EntrustRequestRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustRequestRequestMarshaller();
    }

    /**
     * @return EntrustRequestRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/frontcashier/entrust/request';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param EntrustRequestRequest $request
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
        if($request->getSignType() != null){
            $internalRequest->addParameter('signType', ObjectSerializer::sanitizeForSerialization($request->getSignType(), 'string'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getBankCardNo() != null){
            $internalRequest->addParameter('bankCardNo', ObjectSerializer::sanitizeForSerialization($request->getBankCardNo(), 'string'));
        }
        if($request->getUserName() != null){
            $internalRequest->addParameter('userName', ObjectSerializer::sanitizeForSerialization($request->getUserName(), 'string'));
        }
        if($request->getIdCardNo() != null){
            $internalRequest->addParameter('idCardNo', ObjectSerializer::sanitizeForSerialization($request->getIdCardNo(), 'string'));
        }
        if($request->getPhone() != null){
            $internalRequest->addParameter('phone', ObjectSerializer::sanitizeForSerialization($request->getPhone(), 'string'));
        }
        if($request->getIdCardType() != null){
            $internalRequest->addParameter('idCardType', ObjectSerializer::sanitizeForSerialization($request->getIdCardType(), 'string'));
        }
        if($request->getSignSuccessNotifyUrl() != null){
            $internalRequest->addParameter('signSuccessNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getSignSuccessNotifyUrl(), 'string'));
        }
        if($request->getCollectAmount() != null){
            $internalRequest->addParameter('collectAmount', ObjectSerializer::sanitizeForSerialization($request->getCollectAmount(), 'float'));
        }
        if($request->getCollectBeginDate() != null){
            $internalRequest->addParameter('collectBeginDate', ObjectSerializer::sanitizeForSerialization($request->getCollectBeginDate(), 'string', 'date-time'));
        }
        if($request->getCollectEndDate() != null){
            $internalRequest->addParameter('collectEndDate', ObjectSerializer::sanitizeForSerialization($request->getCollectEndDate(), 'string', 'date-time'));
        }
        if($request->getCycleFrequency() != null){
            $internalRequest->addParameter('cycleFrequency', ObjectSerializer::sanitizeForSerialization($request->getCycleFrequency(), 'int', 'int32'));
        }
        if($request->getCycleStepUnit() != null){
            $internalRequest->addParameter('cycleStepUnit', ObjectSerializer::sanitizeForSerialization($request->getCycleStepUnit(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
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
EntrustRequestRequestMarshaller::__init();
