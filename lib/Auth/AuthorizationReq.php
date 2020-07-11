<?php


namespace Yeepay\Yop\Sdk\Auth;


class AuthorizationReq
{
    /**
     * @var string
     */
    private $signerType;

    /**
     * @var string
     */
    private $credentialType;

    /**
     * @var string
     */
    private $signatureAlg;

    /**
     * @var string
     */
    private $digestAlg;

    /**
     * @var string
     */
    private $protocolPrefix;

    /**
     * AuthorizationReq constructor.
     * @param string $signerType
     * @param string $credentialType
     * @param string $signatureAlg
     * @param string $digestAlg
     * @param string $protocolPrefix
     */
    public function __construct($signerType, $credentialType, $signatureAlg, $digestAlg, $protocolPrefix)
    {
        $this->signerType = $signerType;
        $this->credentialType = $credentialType;
        $this->signatureAlg = $signatureAlg;
        $this->digestAlg = $digestAlg;
        $this->protocolPrefix = $protocolPrefix;
    }

    /**
     * @return string
     */
    public function getSignerType()
    {
        return $this->signerType;
    }

    /**
     * @param string $signerType
     * @return AuthorizationReq
     */
    public function setSignerType($signerType)
    {
        $this->signerType = $signerType;
        return $this;
    }

    /**
     * @return string
     */
    public function getCredentialType()
    {
        return $this->credentialType;
    }

    /**
     * @param string $credentialType
     * @return AuthorizationReq
     */
    public function setCredentialType($credentialType)
    {
        $this->credentialType = $credentialType;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignatureAlg()
    {
        return $this->signatureAlg;
    }

    /**
     * @param string $signatureAlg
     * @return AuthorizationReq
     */
    public function setSignatureAlg($signatureAlg)
    {
        $this->signatureAlg = $signatureAlg;
        return $this;
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
     * @return AuthorizationReq
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
     * @return AuthorizationReq
     */
    public function setProtocolPrefix($protocolPrefix)
    {
        $this->protocolPrefix = $protocolPrefix;
        return $this;
    }

}
