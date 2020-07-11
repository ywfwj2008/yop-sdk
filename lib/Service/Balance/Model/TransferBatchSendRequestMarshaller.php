<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class TransferBatchSendRequestMarshaller implements RequestMarshaller
{
    /**
     * @var TransferBatchSendRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferBatchSendRequestMarshaller();
    }

    /**
     * @return TransferBatchSendRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/balance/transfer_batch_send';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param TransferBatchSendRequest $request
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
        if($request->getProduct() != null){
            $internalRequest->addParameter('product', ObjectSerializer::sanitizeForSerialization($request->getProduct(), 'string'));
        }
        if($request->getTotalAmount() != null){
            $internalRequest->addParameter('totalAmount', ObjectSerializer::sanitizeForSerialization($request->getTotalAmount(), 'float'));
        }
        if($request->getTotalCount() != null){
            $internalRequest->addParameter('totalCount', ObjectSerializer::sanitizeForSerialization($request->getTotalCount(), 'int', 'int32'));
        }
        if($request->getDetailJson() != null){
            $internalRequest->addParameter('detailJson', ObjectSerializer::sanitizeForSerialization($request->getDetailJson(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
TransferBatchSendRequestMarshaller::__init();
