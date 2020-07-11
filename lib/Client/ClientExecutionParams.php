<?php


namespace Yeepay\Yop\Sdk\Client;


use Yeepay\Yop\Sdk\Model\BaseRequest;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Model\Transform\ResponseUnMarshaller;

class ClientExecutionParams
{
    /**
     * @var BaseRequest
     */
    private $request;

    /**
     * @var RequestMarshaller
     */
    private $requestMarshaller;

    /**
     * @var ResponseUnMarshaller
     */
    private $responseUnMarshaller;

    /**
     * ClientExecutionParams constructor.
     * @param $request BaseRequest
     * @param RequestMarshaller $requestMarshaller
     * @param ResponseUnMarshaller $responseUnMarshaller
     */
    public function __construct($request, RequestMarshaller $requestMarshaller, ResponseUnMarshaller $responseUnMarshaller)
    {
        $this->request = $request;
        $this->requestMarshaller = $requestMarshaller;
        $this->responseUnMarshaller = $responseUnMarshaller;
    }

    /**
     * @return BaseRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param BaseRequest $request
     * @return ClientExecutionParams
     */
    public function setRequest(BaseRequest $request)
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return RequestMarshaller
     */
    public function getRequestMarshaller()
    {
        return $this->requestMarshaller;
    }

    /**
     * @param RequestMarshaller $requestMarshaller
     * @return ClientExecutionParams
     */
    public function setRequestMarshaller(RequestMarshaller $requestMarshaller)
    {
        $this->requestMarshaller = $requestMarshaller;
        return $this;
    }

    /**
     * @return ResponseUnMarshaller
     */
    public function getResponseUnMarshaller()
    {
        return $this->responseUnMarshaller;
    }

    /**
     * @param ResponseUnMarshaller $responseUnMarshaller
     * @return ClientExecutionParams
     */
    public function setResponseUnMarshaller(ResponseUnMarshaller $responseUnMarshaller)
    {
        $this->responseUnMarshaller = $responseUnMarshaller;
        return $this;
    }


}