<?php


namespace Yeepay\Yop\Sdk\Config\support;


use Yeepay\Yop\Sdk\Exception\YopClientException;

class ConfigUtils
{
    /**
     * @param array $config
     * @return array
     * @throws YopClientException
     */
    public static function loadPublicKey(array $config)
    {
        $certType = $config['cert_type'];
        if ($config['store_type'] == 'string') {
            return array($certType, self::getPublicKey($config['value']));
        } else {
            throw new YopClientException('unsupported publicKey storeType:' . $config['store_type']);
        }
    }

    /**
     * @param array $config
     * @return array
     * @throws YopClientException
     */
    public static function loadPrivateKey(array $config)
    {
        $certType = $config['cert_type'];
        if ($config['store_type'] == 'string') {
            return array($certType, self::getPrivateKey($config['value']));
        } else if ($config['store_type'] == 'file_12') {
            $certs = array();
            $pkcs12 = file_get_contents($config['value']);
            openssl_pkcs12_read($pkcs12, $certs, $config['password']);
            return array($certType, $certs['pkey']);
        } else {
            throw new YopClientException('unsupported publicKey storeType:' . $config['store_type']);
        }
    }

    /**
     * @param $publicKey
     * @return resource
     * @throws YopClientException
     */
    public static function getPublicKey($publicKey)
    {
        $publicKey = "-----BEGIN PUBLIC KEY-----\n" .
            wordwrap($publicKey, 64, "\n", true) .
            "\n-----END PUBLIC KEY-----";
        $result = openssl_pkey_get_public($publicKey);
        if (empty($result)) {
            throw new YopClientException("illegal publicKey");
        }
        return $result;

    }

    /**
     * @param $privateKey
     * @return resource
     * @throws YopClientException
     */
    public static function getPrivateKey($privateKey)
    {
        $privateKey = "-----BEGIN RSA PRIVATE KEY-----\n" .
            wordwrap($privateKey, 64, "\n", true) .
            "\n-----END RSA PRIVATE KEY-----";
        $result = openssl_pkey_get_private($privateKey);
        if (empty($result)) {
            throw new YopClientException("illegal privateKey");
        }
        return $result;

    }


}