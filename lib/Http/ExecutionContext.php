<?php


namespace Yeepay\Yop\Sdk\Http;


use Yeepay\Yop\Sdk\Auth\Encryptor;
use Yeepay\Yop\Sdk\Auth\Signer;
use Yeepay\Yop\Sdk\Auth\SignOptions;
use Yeepay\Yop\Sdk\Auth\YopRsaCredentials;

class ExecutionContext
{
    /**
     * @var Signer
     */
    private $signer;

    /**
     * @var SignOptions
     */
    private $signOptions;

    /**
     * @var bool
     */
    private $needEncrypt;

    /**
     * @var Encryptor
     */
    private $encryptor;

    /**
     * @var YopRsaCredentials
     */
    private $credentials;

    /**
     * @return Signer
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * @param Signer $signer
     * @return ExecutionContext
     */
    public function setSigner($signer)
    {
        $this->signer = $signer;
        return $this;
    }

    /**
     * @return SignOptions
     */
    public function getSignOptions()
    {
        return $this->signOptions;
    }

    /**
     * @param SignOptions $signOptions
     * @return ExecutionContext
     */
    public function setSignOptions($signOptions)
    {
        $this->signOptions = $signOptions;
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
     * @return ExecutionContext
     */
    public function setNeedEncrypt($needEncrypt)
    {
        $this->needEncrypt = $needEncrypt;
        return $this;
    }

    /**
     * @return Encryptor
     */
    public function getEncryptor()
    {
        return $this->encryptor;
    }

    /**
     * @param Encryptor $encryptor
     * @return ExecutionContext
     */
    public function setEncryptor($encryptor)
    {
        $this->encryptor = $encryptor;
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
     * @return ExecutionContext
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

}