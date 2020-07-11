<?php


namespace Yeepay\Yop\Sdk\Model\Transform;


use Psr\Log\LoggerInterface;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Exception\YopServiceException;
use Yeepay\Yop\Sdk\Http\ContentType;
use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Http\HttpStatus;
use Yeepay\Yop\Sdk\Http\YopHttpResponse;
use Yeepay\Yop\Sdk\Log\LogFactory;
use Yeepay\Yop\Sdk\Model\BaseResponse;
use Yeepay\Yop\Sdk\Model\YopResponseMetadata;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\YopConstants;

abstract class BaseResponseUnMarshaller implements ResponseUnMarshaller
{

    /**
     * @var LoggerInterface
     */
    private static $logger;

    public static function __init()
    {
        self::$logger = LogFactory::getLogger(self::class);
    }

    public function unmarshal(YopHttpResponse $yopHttpResponse, ResponseUnMarshalParams $params)
    {
        $response = $this->getResponseInstance();
        $this->handleResponseMetaData($yopHttpResponse, $response->getMetadata());
        $this->checkSignature($yopHttpResponse, $response->getMetadata()->getYopSign(), $params);
        $this->handleContent($yopHttpResponse, $response->getMetadata()->getContentType(), $response, $params);
        return $response;
    }

    /**
     * @return BaseResponse
     */
    protected abstract function getResponseInstance();

    /**
     * @param YopHttpResponse $yopHttpResponse
     * @param YopResponseMetadata $responseMetadata
     */
    public function handleResponseMetaData($yopHttpResponse, YopResponseMetadata $responseMetadata)
    {
        $responseMetadata->setYopRequestId($yopHttpResponse->getHeader(Headers::YOP_REQUEST_ID));
        $responseMetadata->setYopContentSha256($yopHttpResponse->getHeader(Headers::YOP_CONTENT_SHA256));
        $responseMetadata->setYopSign($yopHttpResponse->getHeader(Headers::YOP_SIGN));
        $responseMetadata->setYopVia($yopHttpResponse->getHeader(Headers::YOP_VIA));
        $responseMetadata->setContentDisposition($yopHttpResponse->getHeader(Headers::CONTENT_DISPOSITION));
        $responseMetadata->setContentEncoding($yopHttpResponse->getHeader(Headers::CONTENT_ENCODING));
        $responseMetadata->setContentLength($yopHttpResponse->getHeaderAsLong(Headers::CONTENT_LENGTH));
        $responseMetadata->setContentType($yopHttpResponse->getHeader(Headers::CONTENT_TYPE));
        $responseMetadata->setDate($yopHttpResponse->getHeaderAsRFC822Date(Headers::DATE));
        $responseMetadata->setTransferEncoding($yopHttpResponse->getHeader(Headers::TRANSFER_ENCODING));

        $etag = $yopHttpResponse->getHeader(Headers::ETAG);
        if (isset($etag)) {
            //TODO 此处对比java版有所简略
            $responseMetadata->setEtag($etag);
        }
        $responseMetadata->setExpires($yopHttpResponse->getHeaderAsRFC822Date(Headers::EXPIRES));
        $responseMetadata->setLastModified($yopHttpResponse->getHeaderAsRFC822Date(Headers::LAST_MODIFIED));
        $responseMetadata->setServer($yopHttpResponse->getHeader(Headers::SERVER));
        if ($responseMetadata->getYopVia() == YopConstants::DEFAULT_SANDBOX_VIA) {
            self::$logger->info('response from sandbox-gateway');
        }

    }

    private function checkSignature(YopHttpResponse $yopHttpResponse, $signature, ResponseUnMarshalParams $params)
    {
        if (isset($signature)) {
            $params->getSigner()->checkSignature($yopHttpResponse, $signature, $params->getPublicKey(), $params->getSignOptions());
        }
    }

    /**
     * @param YopHttpResponse $yopHttpResponse
     * @param $contentType
     * @param BaseResponse $response
     * @param ResponseUnMarshalParams $params
     * @throws YopClientException
     */
    protected function handleContent(YopHttpResponse $yopHttpResponse, $contentType, BaseResponse $response, ResponseUnMarshalParams $params)
    {
        $content = $yopHttpResponse->readContent();
        if ($params->isNeedDecrypt() && $contentType == ContentType::APPLICATION_JSON) {
            $content = $params->getEncryptor()->decrypt($content);
        }
        $statusCode = $yopHttpResponse->getStatusCode();
        if ($statusCode / 100 == HttpStatus::SC_OK / 100) {
            if ($statusCode != HttpStatus::SC_NO_CONTENT) {
                $data = \GuzzleHttp\json_decode($content);
                $response->setResult(ObjectSerializer::deserialize($data->{'result'}, $response->getResultClass()));
            }
        } elseif ($statusCode >= HttpStatus::SC_INTERNAL_SERVER_ERROR && $statusCode != HttpStatus::SC_BAD_GATEWAY) {
            $this->handleErrorResponse($content, $response->getMetadata(), $yopHttpResponse);
        } else {
            throw new YopClientException("Unexpected http statusCode:" . $statusCode);
        }
    }

    /**
     * @param $content
     * @param YopResponseMetadata $responseMetadata
     * @param YopHttpResponse $yopHttpResponse
     * @throws YopServiceException
     */
    protected function handleErrorResponse($content, YopResponseMetadata $responseMetadata, YopHttpResponse $yopHttpResponse)
    {
        $yopServiceException = null;
        if (!empty($content)) {
            try {
                $data = \GuzzleHttp\json_decode($content, true);
                $yopServiceException = new YopServiceException($data['message'], $data['code']);
                $yopServiceException->setRequestId($data['requestId']);
                $yopServiceException->setSubErrorCode($data['subCode']);
                $yopServiceException->setSubErrorMessage($data['subMessage']);
            } catch (\Exception $e) {
                self::$logger->error("unable to parse error response, content" . $content);
            }
        }
        if (!isset($yopServiceException)) {
            $yopServiceException = new YopServiceException($yopHttpResponse->getStatusText());
            $yopServiceException->setRequestId($responseMetadata->getYopRequestId());
        }
        $yopServiceException->setStatusCode($yopHttpResponse->getStatusCode());
        $yopServiceException->setErrorType(YopServiceException::ERROR_TYPE_SERVICE);
        throw $yopServiceException;
    }

}

BaseResponseUnMarshaller::__init();
