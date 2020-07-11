<?php


namespace Yeepay\Yop\Sdk\Model;


use Yeepay\Yop\Sdk\Auth\YopRsaCredentials;

class RequestConfig
{
    /**
     * @var string
     */
    private $appKey;

    /**
     * @var YopRsaCredentials
     */
    private $credentials;

    /**
     * @var array
     */
    private $customRequestHeaders;

    /**
     * @var bool
     */
    private $needEncrypt;

    /**
     * RequestConfig constructor.
     * @param null $appKey
     * @param YopRsaCredentials|null $credentials
     * @param array|null $customRequestHeaders
     * @param bool $needEncrypt
     */
    public function __construct($appKey = null, YopRsaCredentials $credentials = null, array $customRequestHeaders = null, $needEncrypt = false)
    {
        $this->appKey = $appKey;
        $this->credentials = $credentials;
        $this->customRequestHeaders = $customRequestHeaders;
        $this->needEncrypt = $needEncrypt;
    }

    /**
     * @return string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param string $appKey
     * @return RequestConfig
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }

    /**
     * @return YopRsaCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param YopRsaCredentials $credentials
     * @return RequestConfig
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomRequestHeaders()
    {
        return $this->customRequestHeaders;
    }

    /**
     * @param array $customRequestHeaders
     * @return RequestConfig
     */
    public function setCustomRequestHeaders($customRequestHeaders)
    {
        $this->customRequestHeaders = $customRequestHeaders;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedEncrypt()
    {
        return $this->needEncrypt;
    }

    /**
     * @param bool $needEncrypt
     * @return RequestConfig
     */
    public function setNeedEncrypt($needEncrypt)
    {
        $this->needEncrypt = $needEncrypt;
        return $this;
    }


}