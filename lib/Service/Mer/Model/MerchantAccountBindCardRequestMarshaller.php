<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MerchantAccountBindCardRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MerchantAccountBindCardRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAccountBindCardRequestMarshaller();
    }

    /**
     * @return MerchantAccountBindCardRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/mer/merchant/account-bind-card';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param MerchantAccountBindCardRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getBankCardType() != null){
            $internalRequest->addParameter('bankCardType', ObjectSerializer::sanitizeForSerialization($request->getBankCardType(), 'string'));
        }
        if($request->getBankId() != null){
            $internalRequest->addParameter('bankId', ObjectSerializer::sanitizeForSerialization($request->getBankId(), 'string'));
        }
        if($request->getBranchBankCode() != null){
            $internalRequest->addParameter('branchBankCode', ObjectSerializer::sanitizeForSerialization($request->getBranchBankCode(), 'string'));
        }
        if($request->getBankActId() != null){
            $internalRequest->addParameter('bankActId', ObjectSerializer::sanitizeForSerialization($request->getBankActId(), 'string'));
        }
        if($request->getAccountName() != null){
            $internalRequest->addParameter('accountName', ObjectSerializer::sanitizeForSerialization($request->getAccountName(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
MerchantAccountBindCardRequestMarshaller::__init();
