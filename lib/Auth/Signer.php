<?php


namespace Yeepay\Yop\Sdk\Auth;


use Yeepay\Yop\Sdk\Http\YopHttpResponse;
use Yeepay\Yop\Sdk\Internal\Request;

interface Signer
{
    /**
     * @param Request $request
     * @param YopRsaCredentials|null $credentials
     * @param SignOptions|null $options
     */
    public function sign(Request $request, YopRsaCredentials $credentials = null, SignOptions $options = null);

    /**
     * @param YopHttpResponse $httpResponse
     * @param string $signature
     * @param resource $publicKey
     * @param SignOptions $options
     */
    public function checkSignature(YopHttpResponse $httpResponse, $signature, $publicKey, SignOptions $options);
}