<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OpenPayReportQueryRequestMarshaller implements RequestMarshaller
{
    /**
     * @var OpenPayReportQueryRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenPayReportQueryRequestMarshaller();
    }

    /**
     * @return OpenPayReportQueryRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Router';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/router/open-pay-report/query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OpenPayReportQueryRequest $request
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
        if(!empty($request->getMerchantNo())){
            foreach ($request->getMerchantNo() as $value){
                $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($value, 'string'));
            }
        }
        if(!empty($request->getSceneType())){
            foreach ($request->getSceneType() as $value){
                $internalRequest->addParameter('sceneType', ObjectSerializer::sanitizeForSerialization($value, 'string'));
            }
        }
        if($request->getReportId() != null){
            $internalRequest->addParameter('reportId', ObjectSerializer::sanitizeForSerialization($request->getReportId(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OpenPayReportQueryRequestMarshaller::__init();
