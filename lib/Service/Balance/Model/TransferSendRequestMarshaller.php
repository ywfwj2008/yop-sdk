<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TransferSendRequestMarshaller implements RequestMarshaller
{
    /**
     * @var TransferSendRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferSendRequestMarshaller();
    }

    /**
     * @return TransferSendRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Balance';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/balance/transfer_send';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param TransferSendRequest $request
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
        if($request->getBatchNo() != null){
            $internalRequest->addParameter('batchNo', ObjectSerializer::sanitizeForSerialization($request->getBatchNo(), 'string'));
        }
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getAmount() != null){
            $internalRequest->addParameter('amount', ObjectSerializer::sanitizeForSerialization($request->getAmount(), 'float'));
        }
        if($request->getAccountName() != null){
            $internalRequest->addParameter('accountName', ObjectSerializer::sanitizeForSerialization($request->getAccountName(), 'string'));
        }
        if($request->getAccountNumber() != null){
            $internalRequest->addParameter('accountNumber', ObjectSerializer::sanitizeForSerialization($request->getAccountNumber(), 'string', 'bankcard'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getBankName() != null){
            $internalRequest->addParameter('bankName', ObjectSerializer::sanitizeForSerialization($request->getBankName(), 'string'));
        }
        if($request->getBankBranchName() != null){
            $internalRequest->addParameter('bankBranchName', ObjectSerializer::sanitizeForSerialization($request->getBankBranchName(), 'string'));
        }
        if($request->getProvinceCode() != null){
            $internalRequest->addParameter('provinceCode', ObjectSerializer::sanitizeForSerialization($request->getProvinceCode(), 'string'));
        }
        if($request->getCityCode() != null){
            $internalRequest->addParameter('cityCode', ObjectSerializer::sanitizeForSerialization($request->getCityCode(), 'string'));
        }
        if($request->getAbstractInfo() != null){
            $internalRequest->addParameter('abstractInfo', ObjectSerializer::sanitizeForSerialization($request->getAbstractInfo(), 'string'));
        }
        if($request->getProduct() != null){
            $internalRequest->addParameter('product', ObjectSerializer::sanitizeForSerialization($request->getProduct(), 'string'));
        }
        if($request->getFeeType() != null){
            $internalRequest->addParameter('feeType', ObjectSerializer::sanitizeForSerialization($request->getFeeType(), 'string'));
        }
        if($request->getUrgency() != null){
            $internalRequest->addParameter('urgency', ObjectSerializer::sanitizeForSerialization($request->getUrgency(), 'bool'));
        }
        if($request->getDesc() != null){
            $internalRequest->addParameter('desc', ObjectSerializer::sanitizeForSerialization($request->getDesc(), 'string'));
        }
        if($request->getLeaveWord() != null){
            $internalRequest->addParameter('leaveWord', ObjectSerializer::sanitizeForSerialization($request->getLeaveWord(), 'string'));
        }
        if($request->getBankAccountType() != null){
            $internalRequest->addParameter('bankAccountType', ObjectSerializer::sanitizeForSerialization($request->getBankAccountType(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
TransferSendRequestMarshaller::__init();
