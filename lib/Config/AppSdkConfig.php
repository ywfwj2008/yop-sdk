<?php


namespace Yeepay\Yop\Sdk\Config;


use Yeepay\Yop\Sdk\Config\support\ConfigUtils;
use Yeepay\Yop\Sdk\Exception\YopClientException;

class AppSdkConfig
{
    /**
     * @var string
     */
    private $appKey;

    /**
     * @var string
     */
    private $serverRoot;

    /**
     * @var string
     */
    private $yosServerRoot;

    /**
     * @var string
     */
    private $sandboxServerRoot;

    /**
     * @var string
     */
    private $aesSecretKey;

    /**
     * @var string | resource
     */
    private $defaultPublicKey;

    /**
     * @var string | resource
     */
    private $defaultIsvPrivateKey;

    /**
     * @var array
     */
    private $httpClientConfig;

    /**
     * @var string
     */
    private $encryptKey;

    /**
     * @var array
     */
    private $yopPublicKeys;

    /**
     * @var array
     */
    private $isvPrivateKeys;

    /**
     * @var ProxyConfig
     */
    private $proxy;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var bool
     */
    private $trustAllCerts;

    /**
     * @var bool
     */
    private $default;

    /**
     * AppSdkConfig constructor.
     * @param array $data
     * @throws YopClientException
     */
    public function __construct(array $data = [])
    {
        if (isset($data['app_key'])) {
            $this->appKey = $data['app_key'];
        }
        if (isset($data['server_root'])) {
            $this->serverRoot = $data['server_root'];
        }
        if (isset($data['yos_server_root'])) {
            $this->yosServerRoot = $data['yos_server_root'];
        }
        if (isset($data['sandbox_server_root'])) {
            $this->sandboxServerRoot = $data['sandbox_server_root'];
        }
        if (isset($data['aesSecretKey'])) {
            $this->aesSecretKey = $data['aesSecretKey'];
        }
        if (isset($data['yop_public_key'])) {
            $publicKeys = array();
            for ($i = 0; $i < count($data['yop_public_key']); $i++) {
                $publicKeyConfig = $data['yop_public_key'][$i];
                $certs = ConfigUtils::loadPublicKey($publicKeyConfig);
                $publicKeys[$certs[0]] = $certs[1];
                if ($i == 0) {
                    $this->defaultPublicKey = $certs[1];
                }
            }
            $this->yopPublicKeys = $publicKeys;
        }
        if (isset($data['isv_private_key'])) {
            $privateKeys = array();
            for ($i = 0; $i < count($data['isv_private_key']); $i++) {
                $privateKeyConfig = $data['isv_private_key'][$i];
                $certs = ConfigUtils::loadPrivateKey($privateKeyConfig);
                $privateKeys[$certs[0]] = $certs[1];
                if ($i == 0) {
                    $this->defaultIsvPrivateKey = $certs[1];
                }
            }
            $this->isvPrivateKeys = $privateKeys;
        }
        if (isset($data['encrypt_key'])) {
            $this->encryptKey = $data['encrypt_key'];
        }
        if (isset($data['http_client'])) {
            $this->httpClientConfig = $data['http_client'];
        }
        if (isset($data['trust_all_certs'])) {
            $this->trustAllCerts = $data['trust_all_certs'];
        }
        if (isset($data['proxy'])) {
            $proxyConfig = $data['proxy'];
            $this->proxy = new ProxyConfig($proxyConfig['host'], $proxyConfig['port'], $proxyConfig['scheme'], $proxyConfig['username'],
                $proxyConfig['password'], $proxyConfig['domain'], $proxyConfig['workstation']);
        }
        if (isset($data['region'])) {
            $this->region = $data['region'];
        }
        if (isset($data['default'])) {
            $this->default = $data['default'];
        }
        if (isset($data['mode'])) {
            $this->mode = $data['mode'];
        }
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
     * @return AppSdkConfig
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerRoot()
    {
        return $this->serverRoot;
    }

    /**
     * @param string $serverRoot
     * @return AppSdkConfig
     */
    public function setServerRoot($serverRoot)
    {
        $this->serverRoot = $serverRoot;
        return $this;
    }

    /**
     * @return string
     */
    public function getYosServerRoot()
    {
        return $this->yosServerRoot;
    }

    /**
     * @param string $yosServerRoot
     * @return AppSdkConfig
     */
    public function setYosServerRoot($yosServerRoot)
    {
        $this->yosServerRoot = $yosServerRoot;
        return $this;
    }

    /**
     * @return string
     */
    public function getSandboxServerRoot()
    {
        return $this->sandboxServerRoot;
    }

    /**
     * @param string $sandboxServerRoot
     * @return AppSdkConfig
     */
    public function setSandboxServerRoot($sandboxServerRoot)
    {
        $this->sandboxServerRoot = $sandboxServerRoot;
        return $this;
    }

    /**
     * @return string
     */
    public function getAesSecretKey()
    {
        return $this->aesSecretKey;
    }

    /**
     * @param string $aesSecretKey
     * @return AppSdkConfig
     */
    public function setAesSecretKey($aesSecretKey)
    {
        $this->aesSecretKey = $aesSecretKey;
        return $this;
    }

    /**
     * @return resource|string
     */
    public function getDefaultPublicKey()
    {
        return $this->defaultPublicKey;
    }

    /**
     * @param resource|string $defaultPublicKey
     * @return AppSdkConfig
     */
    public function setDefaultPublicKey($defaultPublicKey)
    {
        $this->defaultPublicKey = $defaultPublicKey;
        return $this;
    }

    /**
     * @return resource|string
     */
    public function getDefaultIsvPrivateKey()
    {
        return $this->defaultIsvPrivateKey;
    }

    /**
     * @param resource|string $defaultIsvPrivateKey
     * @return AppSdkConfig
     */
    public function setDefaultIsvPrivateKey($defaultIsvPrivateKey)
    {
        $this->defaultIsvPrivateKey = $defaultIsvPrivateKey;
        return $this;
    }

    /**
     * @return array
     */
    public function getHttpClientConfig()
    {
        return $this->httpClientConfig;
    }

    /**
     * @param array $httpClientConfig
     * @return AppSdkConfig
     */
    public function setHttpClientConfig($httpClientConfig)
    {
        $this->httpClientConfig = $httpClientConfig;
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
     * @return AppSdkConfig
     */
    public function setEncryptKey($encryptKey)
    {
        $this->encryptKey = $encryptKey;
        return $this;
    }

    /**
     * @return array
     */
    public function getYopPublicKeys()
    {
        return $this->yopPublicKeys;
    }

    /**
     * @param array $yopPublicKeys
     * @return AppSdkConfig
     */
    public function setYopPublicKeys($yopPublicKeys)
    {
        $this->yopPublicKeys = $yopPublicKeys;
        return $this;
    }

    /**
     * @return array
     */
    public function getIsvPrivateKeys()
    {
        return $this->isvPrivateKeys;
    }

    /**
     * @param array $isvPrivateKeys
     * @return AppSdkConfig
     */
    public function setIsvPrivateKeys($isvPrivateKeys)
    {
        $this->isvPrivateKeys = $isvPrivateKeys;
        return $this;
    }

    /**
     * @return ProxyConfig
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @param ProxyConfig $proxy
     * @return AppSdkConfig
     */
    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
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
     * @return AppSdkConfig
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return AppSdkConfig
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTrustAllCerts()
    {
        return $this->trustAllCerts;
    }

    /**
     * @param bool $trustAllCerts
     * @return AppSdkConfig
     */
    public function setTrustAllCerts($trustAllCerts)
    {
        $this->trustAllCerts = $trustAllCerts;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDefault()
    {
        return $this->default;
    }

    /**
     * @param bool $default
     * @return AppSdkConfig
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }


}