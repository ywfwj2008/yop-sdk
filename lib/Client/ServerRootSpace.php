<?php


namespace Yeepay\Yop\Sdk\Client;


use GuzzleHttp\Psr7\Uri;

class ServerRootSpace
{
    private static $defaultServerRoot;

    private static $defaultYosServerRoot;

    private static $defaultSandboxServerRoot;

    public static function __init()
    {
        self::$defaultServerRoot = new Uri('https://openapi.yeepay.com/yop-center');
        self::$defaultYosServerRoot = new Uri('https://yos.yeepay.com/yop-center');
        self::$defaultSandboxServerRoot = new Uri('https://sandbox.yeepay.com/yop-center');
    }

    /**
     * @var Uri
     */
    private $serverRoot;

    /**
     * @var Uri
     */
    private $yosServerRoot;

    /**
     * @var Uri
     */
    private $sandboxServerRoot;

    /**
     * ServerRootSpace constructor.
     * @param Uri|null $serverRoot
     * @param Uri|null $yosServerRoot
     * @param Uri|null $sandboxServerRoot
     */
    public function __construct(Uri $serverRoot = null, Uri $yosServerRoot = null, Uri $sandboxServerRoot = null)
    {
        $this->serverRoot = isset($serverRoot) ? $serverRoot : self::$defaultServerRoot;
        $this->yosServerRoot = isset($yosServerRoot) ? $yosServerRoot : self::$defaultYosServerRoot;
        $this->sandboxServerRoot = isset($sandboxServerRoot) ? $sandboxServerRoot : self::$defaultSandboxServerRoot;
    }

    /**
     * @return Uri
     */
    public function getServerRoot()
    {
        return $this->serverRoot;
    }

    /**
     * @return Uri
     */
    public function getYosServerRoot()
    {
        return $this->yosServerRoot;
    }

    /**
     * @return Uri
     */
    public function getSandboxServerRoot()
    {
        return $this->sandboxServerRoot;
    }


}

ServerRootSpace::__init();