<?php


namespace Yeepay\Yop\Sdk\Auth\Credential;


use Yeepay\Yop\Sdk\Auth\YopCredentialProvider;
use Yeepay\Yop\Sdk\Auth\YopRsaCredentials;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Yeepay\Yop\Sdk\Config\support\ConfigUtils;
use Yeepay\Yop\Sdk\Exception\YopClientException;

class DefaultCredentialProvider implements YopCredentialProvider
{
    /**
     * @var array
     */
    private $credentials;

    /**
     * @var array
     */
    private $defaultAppCredentials;

    /**
     * @var array
     */
    private $publicKeys;

    /**
     * DefaultCredentialProvider constructor.
     * @param AppSdkConfigProvider $appSdkConfigProvider
     * @throws YopClientException
     */
    public function __construct(AppSdkConfigProvider $appSdkConfigProvider)
    {
        $this->credentials = array();
        foreach ($appSdkConfigProvider->getAllConfig() as $appKey => $appKeySdkConfig) {
            /* @var $appKeySdkConfig AppSdkConfig */
            $appKeyCredentials = array();
            if (!empty($appKeySdkConfig->getIsvPrivateKeys())) {
                foreach ($appKeySdkConfig->getIsvPrivateKeys() as $credentialType => $isvPrivateKey) {
                    /* @var $isvPrivateKey string|resource */
                    if (is_string($isvPrivateKey)) {
                        $appKeyCredentials[$credentialType] = new YopRsaCredentials($appKey,
                            ConfigUtils::getPrivateKey($isvPrivateKey),
                            $appKeySdkConfig->getEncryptKey());
                    } else if (is_resource($isvPrivateKey)) {
                        $appKeyCredentials[$credentialType] = new YopRsaCredentials($appKey, $isvPrivateKey,
                            $appKeySdkConfig->getEncryptKey());
                    }
                }
            }
            if (!empty($appKeyCredentials)) {
                $this->credentials[$appKey] = $appKeyCredentials;
            }
        }
        $this->defaultAppCredentials = $this->credentials[$appSdkConfigProvider->getDefaultConfig()->getAppKey()];
        $this->publicKeys = $appSdkConfigProvider->getDefaultConfig()->getYopPublicKeys();
    }


    /**
     * @param $appKey string
     * @param $credentialType string
     * @return YopRsaCredentials
     */
    public function getCredential($appKey, $credentialType)
    {
        if (isset($this->credentials[$appKey])) {
            return $this->credentials[$appKey][$credentialType];
        }
    }

    /**
     * @param $credentialType string
     * @return YopRsaCredentials
     */
    public function getDefaultAppCredential($credentialType)
    {
        return $this->defaultAppCredentials[$credentialType];
    }

    /**
     * @param $credentialType string
     * @return resource
     */
    public function getYopPublicKey($credentialType)
    {
        return $this->publicKeys[$credentialType];
    }
}
