<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CommonVerifyconfirmRequestMarshaller implements RequestMarshaller
{
    /**
     * @var CommonVerifyconfirmRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonVerifyconfirmRequestMarshaller();
    }

    /**
     * @return CommonVerifyconfirmRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Member';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.1/member/common/verifyConfirm';

    /**
     * @var string
     */
    private $contentType = 'application/json';


    /**
     * @param CommonVerifyconfirmRequest $request
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
        $content = \GuzzleHttp\json_encode($request->getBody());
        $internalRequest->setContent(\GuzzleHttp\Psr7\stream_for($content));
        $internalRequest->addHeader(Headers::CONTENT_LENGTH, strlen($content));
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CommonVerifyconfirmRequestMarshaller::__init();
