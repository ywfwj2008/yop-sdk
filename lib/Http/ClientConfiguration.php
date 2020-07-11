<?php


namespace Yeepay\Yop\Sdk\Http;


use Yeepay\Yop\Sdk\Utils\Http\Region;
use Yeepay\Yop\Sdk\Utils\YopConstants;

class ClientConfiguration
{
    const DEFAULT_CONNECTION_TIMEOUT_IN_MILLIS = 50000;

    const DEFAULT_SOCKET_TIMEOUT_IN_MILLIS = 50000;

    private static $defaultUserAgent;

    private static $defaultRegion = Region::CN_N1;

    /**
     * ClientConfiguration constructor.
     * @param int $connectionTimeoutInMillis
     * @param int $socketTimeoutInMillis
     * @param null $userAgent
     * @param null $proxyUrl
     */
    public function __construct($connectionTimeoutInMillis = self::DEFAULT_CONNECTION_TIMEOUT_IN_MILLIS, $socketTimeoutInMillis = self::DEFAULT_SOCKET_TIMEOUT_IN_MILLIS, $userAgent = null, $region = null, $proxyUrl = null)
    {
        $this->connectionTimeoutInMillis = $connectionTimeoutInMillis;
        $this->socketTimeoutInMillis = $socketTimeoutInMillis;

        $this->userAgent = isset($userAgent) ? $userAgent : self::$defaultUserAgent;
        $this->region = isset($region) ? $region : self::$defaultRegion;

        $this->proxyUrl = $proxyUrl;
    }

    public static function __init()
    {
        self::$defaultUserAgent = YopConstants::LANG . '/' . YopConstants::VERSION . '/' . php_uname('s') . '/' . php_uname('r') . '/m/m/' . phpversion();
    }

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var string
     */
    private $proxyUrl;

    /**
     * @var float
     */
    private $connectionTimeoutInMillis;

    /**
     * @var float
     */
    private $socketTimeoutInMillis;

    /**
     * @var string
     */
    private $region;

    /**
     * @return mixed
     */
    public static function getDefaultUserAgent()
    {
        return self::$defaultUserAgent;
    }

    /**
     * @param mixed $defaultUserAgent
     */
    public static function setDefaultUserAgent($defaultUserAgent)
    {
        self::$defaultUserAgent = $defaultUserAgent;
    }

    /**
     * @return string
     */
    public static function getDefaultRegion()
    {
        return self::$defaultRegion;
    }

    /**
     * @param string $defaultRegion
     */
    public static function setDefaultRegion($defaultRegion)
    {
        self::$defaultRegion = $defaultRegion;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @param mixed $userAgent
     * @return ClientConfiguration
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * @return string
     */
    public function getProxyUrl()
    {
        return $this->proxyUrl;
    }

    /**
     * @param string $proxyUrl
     * @return ClientConfiguration
     */
    public function setProxyUrl($proxyUrl)
    {
        $this->proxyUrl = $proxyUrl;
        return $this;
    }

    /**
     * @return float
     */
    public function getConnectionTimeoutInMillis()
    {
        return $this->connectionTimeoutInMillis;
    }

    /**
     * @param float $connectionTimeoutInMillis
     * @return ClientConfiguration
     */
    public function setConnectionTimeoutInMillis($connectionTimeoutInMillis)
    {
        $this->connectionTimeoutInMillis = $connectionTimeoutInMillis;
        return $this;
    }

    /**
     * @return float
     */
    public function getSocketTimeoutInMillis()
    {
        return $this->socketTimeoutInMillis;
    }

    /**
     * @param float $socketTimeoutInMillis
     * @return ClientConfiguration
     */
    public function setSocketTimeoutInMillis($socketTimeoutInMillis)
    {
        $this->socketTimeoutInMillis = $socketTimeoutInMillis;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return ClientConfiguration
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

}

ClientConfiguration::__init();