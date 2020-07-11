<?php


namespace Yeepay\Yop\Sdk\Model\Transform;


use Yeepay\Yop\Sdk\Auth\Encryptor;
use Yeepay\Yop\Sdk\Auth\Signer;
use Yeepay\Yop\Sdk\Auth\SignOptions;

class ResponseUnMarshalParams
{
    /**
     * @var resource
     */
    private $publicKey;

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
    private $needDecrypt;

    /**
     * @var Encryptor
     */
    private $encryptor;

    /**
     * @return resource
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * @param resource $publicKey
     * @return ResponseUnMarshalParams
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
        return $this;
    }

    /**
     * @return Signer
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * @param Signer $signer
     * @return ResponseUnMarshalParams
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
     * @return ResponseUnMarshalParams
     */
    public function setSignOptions($signOptions)
    {
        $this->signOptions = $signOptions;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNeedDecrypt()
    {
        return $this->needDecrypt;
    }

    /**
     * @param bool $needDecrypt
     * @return ResponseUnMarshalParams
     */
    public function setNeedDecrypt($needDecrypt)
    {
        $this->needDecrypt = $needDecrypt;
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
     * @return ResponseUnMarshalParams
     */
    public function setEncryptor($encryptor)
    {
        $this->encryptor = $encryptor;
        return $this;
    }

}
