<?php


namespace Yeepay\Yop\Sdk\Client;


use GuzzleHttp\Psr7\Uri;
use Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Yeepay\Yop\Sdk\Auth\YopCredentialProvider;
use Yeepay\Yop\Sdk\Http\ClientConfiguration;

class ClientParams
{
    /**
     * @var Uri
     */
    private $endPoint;

    /**
     * @var Uri
     */
    private $yosEndPoint;

    /**
     * @var Uri
     */
    private $sandboxEndPoint;

    /**
     * @var ClientConfiguration
     */
    private $clientConfiguration;

    /**
     * @var AuthorizationReqRegistry
     */
    private $authorizationReqRegistry;

    /**
     * @var YopCredentialProvider
     */
    private $credentialsProvider;

    /**
     * @var array
     */
    private $modes;

    /**
     * @return Uri
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * @param Uri $endPoint
     * @return ClientParams
     */
    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * @return Uri
     */
    public function getYosEndPoint()
    {
        return $this->yosEndPoint;
    }

    /**
     * @param Uri $yosEndPoint
     * @return ClientParams
     */
    public function setYosEndPoint($yosEndPoint)
    {
        $this->yosEndPoint = $yosEndPoint;
        return $this;
    }

    /**
     * @return Uri
     */
    public function getSandboxEndPoint()
    {
        return $this->sandboxEndPoint;
    }

    /**
     * @param Uri $sandboxEndPoint
     * @return ClientParams
     */
    public function setSandboxEndPoint($sandboxEndPoint)
    {
        $this->sandboxEndPoint = $sandboxEndPoint;
        return $this;
    }

    /**
     * @return ClientConfiguration
     */
    public function getClientConfiguration()
    {
        return $this->clientConfiguration;
    }

    /**
     * @param ClientConfiguration $clientConfiguration
     * @return ClientParams
     */
    public function setClientConfiguration($clientConfiguration)
    {
        $this->clientConfiguration = $clientConfiguration;
        return $this;
    }

    /**
     * @return AuthorizationReqRegistry
     */
    public function getAuthorizationReqRegistry()
    {
        return $this->authorizationReqRegistry;
    }

    /**
     * @param AuthorizationReqRegistry $authorizationReqRegistry
     * @return ClientParams
     */
    public function setAuthorizationReqRegistry($authorizationReqRegistry)
    {
        $this->authorizationReqRegistry = $authorizationReqRegistry;
        return $this;
    }

    /**
     * @return YopCredentialProvider
     */
    public function getCredentialsProvider()
    {
        return $this->credentialsProvider;
    }

    /**
     * @param YopCredentialProvider $credentialsProvider
     * @return ClientParams
     */
    public function setCredentialsProvider($credentialsProvider)
    {
        $this->credentialsProvider = $credentialsProvider;
        return $this;
    }

    /**
     * @return array
     */
    public function getModes()
    {
        return $this->modes;
    }

    /**
     * @param array $modes
     * @return ClientParams
     */
    public function setModes($modes)
    {
        $this->modes = $modes;
        return $this;
    }


}