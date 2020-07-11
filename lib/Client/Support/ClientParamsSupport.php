<?php


namespace Yeepay\Yop\Sdk\Client\Support;


use GuzzleHttp\Psr7\Uri;
use Yeepay\Yop\Sdk\Auth\Credential\DefaultCredentialProvider;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Config\AppSdkConfigProvider;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Http\ClientConfiguration;

class ClientParamsSupport
{
    /**
     * @param AppSdkConfigProvider $appSdkConfigProvider
     * @return ClientParams
     * @throws YopClientException
     */
    public static function generateClientParams(AppSdkConfigProvider $appSdkConfigProvider)
    {
        $clientParams = new ClientParams();
        $clientParams->setCredentialsProvider(new DefaultCredentialProvider($appSdkConfigProvider));
        $defaultAppSdkConfig = $appSdkConfigProvider->getDefaultConfig();
        if (!empty($defaultAppSdkConfig->getServerRoot())) {
            $clientParams->setEndPoint(new Uri($defaultAppSdkConfig->getServerRoot()));
        }
        if (!empty($defaultAppSdkConfig->getYosServerRoot())) {
            $clientParams->setYosEndPoint(new Uri($defaultAppSdkConfig->getYosServerRoot()));
        }
        if (!empty($defaultAppSdkConfig->getSandboxServerRoot())) {
            $clientParams->setSandboxEndPoint(new Uri($defaultAppSdkConfig->getSandboxServerRoot()));
        }
        $clientConfigurations = new ClientConfiguration();
        if (!empty($defaultAppSdkConfig->getHttpClientConfig())) {
            $httpClientConfig = $defaultAppSdkConfig->getHttpClientConfig();
            $clientConfigurations->setSocketTimeoutInMillis($httpClientConfig['read_timeout']);
            $clientConfigurations->setConnectionTimeoutInMillis($httpClientConfig['connect_timeout']);
        }
        if (!empty($defaultAppSdkConfig->getProxy())) {
            $proxyConfig = $defaultAppSdkConfig->getProxy();
            $parts = array('scheme' => $proxyConfig->getScheme(), 'host' => $proxyConfig->getHost(), 'port' => $proxyConfig->getPort());
            if (!empty($proxyConfig->getUsername()) && !empty($proxyConfig->getPort())) {
                $parts['user'] = $proxyConfig->getUsername();
                $parts['pass'] = $proxyConfig->getPassword();
            }
            $proxyURI = new Uri($parts);
            $clientConfigurations->setProxyUrl($proxyURI->__toString());
        }
        $clientParams->setClientConfiguration($clientConfigurations);
        $modes = array();
        foreach ($appSdkConfigProvider->getAllConfig() as $appKey => $appKeySdkConfig) {
            /* @var $appKeySdkConfig AppSdkConfig */
            if (!empty($appKeySdkConfig->getMode())) {
                $modes[$appKey] = $appKeySdkConfig->getMode();
            }
        }
        $clientParams->setModes($modes);
        return $clientParams;
    }
}
