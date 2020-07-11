<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class MerchantQualUploadRequestMarshaller implements RequestMarshaller
{
    /**
     * @var MerchantQualUploadRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQualUploadRequestMarshaller();
    }

    /**
     * @return MerchantQualUploadRequestMarshaller
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
    private $resourcePath = '/yos/v1.0/sys/merchant/qual/upload';

    /**
     * @var string
     */
    private $contentType = 'multipart/form-data';


    /**
     * @param MerchantQualUploadRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        $internalRequest->setYosFlag(true);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getMerQual() != null){
            $internalRequest->addMultiPartFile('merQual', $request->getMerQual());
        }
        if($request->getMerQualOriginalFileName() != null){
            $internalRequest->addParameter('merQualOriginalFileName', ObjectSerializer::sanitizeForSerialization($request->getMerQualOriginalFileName(), 'string'));
        }
        if($request->getMerQualFileSize() != null){
            $internalRequest->addParameter('merQualFileSize', ObjectSerializer::sanitizeForSerialization($request->getMerQualFileSize(), 'string'));
        }
        if($request->getMerQualMd5() != null){
            $internalRequest->addParameter('merQualMd5', ObjectSerializer::sanitizeForSerialization($request->getMerQualMd5(), 'string'));
        }

        return $internalRequest;
    }
}
MerchantQualUploadRequestMarshaller::__init();
