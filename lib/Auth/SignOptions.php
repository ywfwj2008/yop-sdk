<?php


namespace Yeepay\Yop\Sdk\Auth;


class SignOptions
{
    const DEFAULT_EXPIRATION_IN_SECONDS = 1800;

    /**
     * @var string
     */
    private $digestAlg;

    /**
     * @var string
     */
    private $protocolPrefix;

    /**
     * @var int
     */
    private $expirationInSeconds = self::DEFAULT_EXPIRATION_IN_SECONDS;

    /**
     * SignOptions constructor.
     * @param string $digestAlg
     * @param string $protocolPrefix
     * @param int $expirationInSeconds
     */
    public function __construct($digestAlg, $protocolPrefix, $expirationInSeconds = null)
    {
        $this->digestAlg = $digestAlg;
        $this->protocolPrefix = $protocolPrefix;
        if (isset($expirationInSeconds)) {
            $this->expirationInSeconds = $expirationInSeconds;
        }
    }

    /**
     * @return string
     */
    public function getDigestAlg()
    {
        return $this->digestAlg;
    }

    /**
     * @param string $digestAlg
     * @return SignOptions
     */
    public function setDigestAlg($digestAlg)
    {
        $this->digestAlg = $digestAlg;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtocolPrefix()
    {
        return $this->protocolPrefix;
    }

    /**
     * @param string $protocolPrefix
     * @return SignOptions
     */
    public function setProtocolPrefix($protocolPrefix)
    {
        $this->protocolPrefix = $protocolPrefix;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpirationInSeconds()
    {
        return $this->expirationInSeconds;
    }

    /**
     * @param int $expirationInSeconds
     * @return SignOptions
     */
    public function setExpirationInSeconds($expirationInSeconds)
    {
        $this->expirationInSeconds = $expirationInSeconds;
        return $this;
    }

}