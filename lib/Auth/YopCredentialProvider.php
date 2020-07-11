<?php


namespace Yeepay\Yop\Sdk\Auth;


interface YopCredentialProvider
{
    /**
     * @param $appKey string
     * @param $credentialType string
     * @return YopRsaCredentials
     */
    public function getCredential($appKey, $credentialType);

    /**
     * @param $credentialType string
     * @return YopRsaCredentials
     */
    public function getDefaultAppCredential($credentialType);

    /**
     * @param $credentialType string
     * @return resource
     */
    public function getYopPublicKey($credentialType);
}