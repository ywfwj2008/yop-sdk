<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class YopSimpleRemitDownloadElectronicReceiptRequestMarshaller implements RequestMarshaller
{
    /**
     * @var YopSimpleRemitDownloadElectronicReceiptRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new YopSimpleRemitDownloadElectronicReceiptRequestMarshaller();
    }

    /**
     * @return YopSimpleRemitDownloadElectronicReceiptRequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/yos/v1.0/balance/yop-simple-remit/download-electronic-receipt';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param YopSimpleRemitDownloadElectronicReceiptRequest $request
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
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
YopSimpleRemitDownloadElectronicReceiptRequestMarshaller::__init();
