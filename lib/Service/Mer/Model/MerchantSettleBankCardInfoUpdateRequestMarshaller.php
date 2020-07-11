<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MerchantSettleBankCardInfoUpdateRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MerchantSettleBankCardInfoUpdateRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantSettleBankCardInfoUpdateRequestMarshaller();
    }

    /**
     * @return MerchantSettleBankCardInfoUpdateRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/mer/merchant/settle-bank-card-info-update';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param MerchantSettleBankCardInfoUpdateRequest $request
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
        if($request->getBankcardNo() != null){
            $internalRequest->addParameter('bankcardNo', ObjectSerializer::sanitizeForSerialization($request->getBankcardNo(), 'string'));
        }
        if($request->getHeadBankName() != null){
            $internalRequest->addParameter('headBankName', ObjectSerializer::sanitizeForSerialization($request->getHeadBankName(), 'string'));
        }
        if($request->getBankName() != null){
            $internalRequest->addParameter('bankName', ObjectSerializer::sanitizeForSerialization($request->getBankName(), 'string'));
        }
        if($request->getBankProvince() != null){
            $internalRequest->addParameter('bankProvince', ObjectSerializer::sanitizeForSerialization($request->getBankProvince(), 'string'));
        }
        if($request->getBankCity() != null){
            $internalRequest->addParameter('bankCity', ObjectSerializer::sanitizeForSerialization($request->getBankCity(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerNo() != null){
            $internalRequest->addParameter('merNo', ObjectSerializer::sanitizeForSerialization($request->getMerNo(), 'string'));
        }
        if($request->getAgentNo() != null){
            $internalRequest->addParameter('agentNo', ObjectSerializer::sanitizeForSerialization($request->getAgentNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
MerchantSettleBankCardInfoUpdateRequestMarshaller::__init();
