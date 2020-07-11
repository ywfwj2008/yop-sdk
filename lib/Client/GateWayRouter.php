<?php


namespace Yeepay\Yop\Sdk\Client;


use GuzzleHttp\Psr7\Uri;
use Yeepay\Yop\Sdk\Config\Mode;
use Yeepay\Yop\Sdk\Internal\Request;

class GateWayRouter
{

    /**
     * @var ServerRootSpace
     */
    private $serverRootSpace;

    /**
     * @var array
     */
    private $independentApiGroups;

    /**
     * @var string
     */
    private $defaultMode;

    /**
     * @var array
     */
    private $modes;

    /**
     * GateWayRouter constructor.
     * @param ServerRootSpace $serverRootSpace
     * @param $modes
     */
    public function __construct(ServerRootSpace $serverRootSpace, $modes = [])
    {
        $this->serverRootSpace = $serverRootSpace;
        $this->independentApiGroups = array("bank-encryption");
        $this->defaultMode = getenv("yop.sdk.mode");
        $this->modes = $modes;
    }

    /**
     * @param $appKey string
     * @param $request Request
     * @return Uri
     */
    public function route($appKey, $request)
    {
        if ($this->isAppInSandboxMode($appKey)) {
            return $this->serverRootSpace->getSandboxServerRoot();
        } else {
            $serverRoot = $request->getYosFlag() ? $this->serverRootSpace->getYosServerRoot() :
                $this->serverRootSpace->getServerRoot();
            $apiGroup = str_replace('_', '-', strtolower($request->getServiceName()));
            if (in_array($apiGroup, $this->independentApiGroups)) {
                $result = new Uri();
                $result->withScheme($serverRoot->getScheme());
                $result->withHost($serverRoot->getHost());
                $result->withPort($serverRoot->getPort());
                $result->withPath($serverRoot->getPath());
                $result->withUserInfo($serverRoot->getUserInfo());
                $result->withQuery($serverRoot->getQuery());
                $result->withFragment($serverRoot->getFragment());
                return $result;
            } else {
                return $serverRoot;
            }
        }
    }

    /**
     * @param string $appKey
     * @return bool
     */
    private function isAppInSandboxMode($appKey)
    {
        if (empty($this->defaultMode)) {
            return isset($this->modes[$appKey]) && $this->modes[$appKey] = Mode::SANDBOX;
        }
        return $this->defaultMode == Mode::SANDBOX;
    }

    /**
     * @param string $apiGroup
     * @param string $originHost
     * @param bool $isYosRequest
     * @return string
     */
    private function getIndependentApiGroupHost($apiGroup, $originHost, $isYosRequest)
    {
        if ($isYosRequest) {
            return $originHost;
        }
        $index = strpos($originHost, '.');
        return substr($originHost, 0, $index) . '_' . $apiGroup . substr($originHost, $index, -1);
    }
}