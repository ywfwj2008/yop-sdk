<?php


namespace Yeepay\Yop\Sdk\Auth;


class YopRsaCredentials
{
    /**
     * @var string
     */
    private $appKey;

    /**
     * @var resource
     */
    private $privateKey;

    /**
     * @var string
     */
    private $encryptKey;

    /**
     * YopRsaCredentials constructor.
     * @param string $appKey
     * @param resource $privateKey
     * @param string $encryptKey
     */
    public function __construct($appKey, $privateKey, $encryptKey)
    {
        $this->appKey = $appKey;
        $this->privateKey = $privateKey;
        $this->encryptKey = $encryptKey;
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
     * @return YopRsaCredentials
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }

    /**
     * @return resource
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * @param resource $privateKey
     * @return YopRsaCredentials
     */
    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getEncryptKey()
    {
        return $this->encryptKey;
    }

    /**
     * @param string $encryptKey
     * @return YopRsaCredentials
     */
    public function setEncryptKey($encryptKey)
    {
        $this->encryptKey = $encryptKey;
        return $this;
    }





}