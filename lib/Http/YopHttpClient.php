<?php


namespace Yeepay\Yop\Sdk\Http;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Internal\MultiPartFile;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Log\LogFactory;
use Yeepay\Yop\Sdk\Utils\Http\HttpUtils;

class YopHttpClient
{
    /**
     * @var ClientConfiguration
     */
    private $clientConfiguration;

    /**
     * @var Client
     */
    private $guzzleClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * YopHttpClient constructor.
     * @param ClientConfiguration $clientConfiguration
     */
    public function __construct(ClientConfiguration $clientConfiguration)
    {

        $this->logger = LogFactory::getLogger(get_class($this));
        $this->clientConfiguration = $clientConfiguration;
        $guzzleClientConfig = array(RequestOptions::CONNECT_TIMEOUT => $clientConfiguration->getConnectionTimeoutInMillis() / 1000,
            RequestOptions::TIMEOUT, $clientConfiguration->getSocketTimeoutInMillis() / 1000,
        );
        if (!empty($clientConfiguration->getProxyUrl())) {
            $guzzleClientConfig[RequestOptions::PROXY] = $clientConfiguration->getProxyUrl();
        }
        $this->guzzleClient = new Client($guzzleClientConfig);
    }

    /**
     * @param Request $request
     * @param ExecutionContext $executionContext
     * @return YopHttpResponse
     * @throws YopClientException
     */
    public function execute(Request $request, ExecutionContext $executionContext)
    {
        $credentials = $executionContext->getCredentials();
        $request->addHeader(Headers::YOP_APPKEY, $credentials->getAppKey());
        $request->addHeader(Headers::USER_AGENT, $this->clientConfiguration->getUserAgent());
        if ($executionContext->isNeedEncrypt()) {
            $executionContext->getEncryptor()->encrypt($request);
        }
        $executionContext->getSigner()->sign($request, $executionContext->getCredentials(), $executionContext->getSignOptions());
        try {
            $guzzleResponse = $this->sendRequest($request);
        } catch (ServerException $e) {
            $guzzleResponse = $e->getResponse();
        } catch (\Throwable $e) {
            throw new YopClientException("execute request failed:" . $e->getMessage());
        }
        return new YopHttpResponse($guzzleResponse);
    }

    /**
     * @param Request $request
     * @return mixed|ResponseInterface
     * @throws GuzzleException
     * @throws YopClientException
     */
    private function sendRequest(Request $request)
    {
        $uri = $request->getEndpoint() . HttpUtils::urlEncodeExceptSlash($request->getResourcePath());
        if (!empty($request->getMultipartFiles())) {
            if ($request->getHttpMethod() == HttpMethod::POST) {
                $body = array();
                if (!empty($request->getParameters())) {
                    foreach ($request->getParameters() as $k => $v) {
                        if (!empty($v)) {
                            foreach ($v as $value) {
                                $body[] = array('name' => $k, 'contents' => $value);
                            }
                        }
                    }
                }
                foreach ($request->getMultipartFiles() as $k => $v) {
                    $part = array('name' => $k);
                    if (!empty($v)) {
                        foreach ($v as $value) {
                            /** @var MultiPartFile $value */
                            $part['contents'] = $value->getContent();
                            $part['filename'] = $value->getFileName();
                            $body[] = $part;
                        }
                    }
                }
                return $this->guzzleClient->request($request->getHttpMethod(), $uri,
                    array(RequestOptions::MULTIPART => $body,
                        RequestOptions::HEADERS => $request->getHeaders()));
            } else {
                throw new YopClientException("contentType:multipart/form-data only support post request.");
            }
        }
        $requestIsPostOrPut = $request->getHttpMethod() == HttpMethod::POST || $request->getHttpMethod() == HttpMethod::PUT;
        $requestHasPayload = !empty($request->getContent());
        $putParamsInUri = !$requestIsPostOrPut || $requestHasPayload;
        if ($putParamsInUri) {
            $encodedParameters = \GuzzleHttp\Psr7\build_query(HttpUtils::encodedParameters($request->getParameters()));
            if (!empty($encodedParameters)) {
                $uri = $uri . '?' . $encodedParameters;
            }
        }
        $requestOptions = array(RequestOptions::HEADERS => $request->getHeaders());
        if ($requestHasPayload) {
            $requestOptions[RequestOptions::BODY] = $request->getContent();
        } else if ($requestIsPostOrPut) {
            $requestOptions[RequestOptions::BODY] = \GuzzleHttp\Psr7\build_query(HttpUtils::encodedParameters($request->getParameters()));
        }
        return $this->guzzleClient->request($request->getHttpMethod(), $uri, $requestOptions);
    }

}
