<?php


namespace Yeepay\Yop\Sdk\Config;


class ProxyConfig
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port;

    /**
     * @var string
     */
    private $scheme;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var string
     */
    private $workstation;

    /**
     * ProxyConfig constructor.
     * @param $host
     * @param $port
     * @param $scheme
     * @param null $username
     * @param null $password
     * @param null $domain
     * @param null $workstation
     */
    public function __construct($host, $port, $scheme, $username = null, $password = null, $domain = null, $workstation = null)
    {
        $this->host = $host;
        $this->port = $port;
        $this->scheme = $scheme;
        $this->username = $username;
        $this->password = $password;
        $this->domain = $domain;
        $this->workstation = $workstation;
    }


    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return ProxyConfig
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     * @return ProxyConfig
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getScheme()
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     * @return ProxyConfig
     */
    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return ProxyConfig
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return ProxyConfig
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return ProxyConfig
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkstation()
    {
        return $this->workstation;
    }

    /**
     * @param string $workstation
     * @return ProxyConfig
     */
    public function setWorkstation($workstation)
    {
        $this->workstation = $workstation;
        return $this;
    }

}