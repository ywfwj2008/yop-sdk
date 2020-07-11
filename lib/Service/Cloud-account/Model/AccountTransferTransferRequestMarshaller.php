<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AccountTransferTransferRequestMarshaller implements RequestMarshaller
{
    /**
     * @var AccountTransferTransferRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountTransferTransferRequestMarshaller();
    }

    /**
     * @return AccountTransferTransferRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'CloudAccount';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/cloud-account/account-transfer/transfer';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AccountTransferTransferRequest $request
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
        if($request->getAmount() != null){
            $internalRequest->addParameter('amount', ObjectSerializer::sanitizeForSerialization($request->getAmount(), 'float'));
        }
        if($request->getCreditCustomerNo() != null){
            $internalRequest->addParameter('creditCustomerNo', ObjectSerializer::sanitizeForSerialization($request->getCreditCustomerNo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getUsage() != null){
            $internalRequest->addParameter('usage', ObjectSerializer::sanitizeForSerialization($request->getUsage(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AccountTransferTransferRequestMarshaller::__init();
