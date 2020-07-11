<?php


namespace Yeepay\Yop\Sdk\Model;


abstract class BaseRequest
{
    /**
     * @var RequestConfig
     */
    private $requestConfig;

    /**
     * @return RequestConfig
     */
    public function getRequestConfig()
    {
        return $this->requestConfig;
    }

    /**
     * @param RequestConfig $requestConfig
     * @return BaseRequest
     */
    public function setRequestConfig($requestConfig)
    {
        $this->requestConfig = $requestConfig;
        return $this;
    }

    /**
     * @return string
     */
    public static function getOperationId()
    {
        return '';
    }
}