<?php


namespace Yeepay\Yop\Sdk\Auth\Signer;


use DateTime;
use Yeepay\Yop\Sdk\Auth\Signer;
use Yeepay\Yop\Sdk\Auth\SignOptions;
use Yeepay\Yop\Sdk\Auth\YopRsaCredentials;
use Yeepay\Yop\Sdk\Exception\VerifySignFailedException;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Http\YopHttpResponse;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Security\Encodes;
use Yeepay\Yop\Sdk\Utils\DateUtils;
use Yeepay\Yop\Sdk\Utils\Http\HttpUtils;

class RsaSigner implements Signer
{

    private static $yopAuthVersion = 'yop-auth-v3';

    private static $defaultHeadersToSign;
    private static $headerJoiner = PHP_EOL;

    private static $signedHeaderStringJoiner = ';';

    private $logger;

    public static function __init()
    {
        self::$defaultHeadersToSign = array(
            strtolower(Headers::CONTENT_LENGTH),
            strtolower(Headers::CONTENT_TYPE),
            strtolower(Headers::CONTENT_DISPOSITION),
            strtolower(Headers::CONTENT_MD5),
            strtolower(Headers::YOP_REQUEST_ID),
            strtolower(Headers::YOP_DATE),
            strtolower(Headers::YOP_APPKEY),
            strtolower(Headers::YOP_CONTENT_SHA256),
            strtolower(Headers::YOP_HASH_CRC64ECMA));

    }


    public function sign(Request $request, YopRsaCredentials $credentials = null, SignOptions $options = null)
    {
        if ($credentials == null) {
            return;
        }
        $accessKeyId = $credentials->getAppKey();
        $request->addHeader(Headers::HOST, HttpUtils:: generateHostHeader($request->getEndpoint()));
        $timestamp = new DateTime();
        $timestamp->setTimezone(DateUtils::$UTC_TIMEZONE);

        $contentSha256 = $this->calculateContentHash($request);
        if (isset($contentSha256)) {
            $request->addHeader(Headers::YOP_CONTENT_SHA256, $contentSha256);
        }
        $canonicalQueryString = $this->getCanonicalQueryString($request);
        $headersToSign = $this->getHeadersToSign($request->getHeaders(), self::$defaultHeadersToSign);
        $canonicalHeader = $this->getCanonicalHeaders($headersToSign);
        $signedHeaders = strtolower(trim(implode(self::$signedHeaderStringJoiner, array_keys($headersToSign))));

        $authString = self::$yopAuthVersion . '/' . $accessKeyId . '/' . DateUtils::formatAlternateIso8601Date($timestamp) . '/'
            . $options->getExpirationInSeconds();

        $canonicalURI = $this->getCanonicalURIPath($request->getResourcePath());
        $canonicalRequest = $authString . self::$headerJoiner . $request->getHttpMethod() . self::$headerJoiner . $canonicalURI
            . self::$headerJoiner . $canonicalQueryString . self::$headerJoiner . $canonicalHeader;

        $signature = $this->computeSignature($canonicalRequest, $credentials->getPrivateKey(), $options->getDigestAlg());
        $authorizationHeader = $options->getProtocolPrefix() . ' ' . $authString . '/' . $signedHeaders . '/' . $signature;
        $request->addHeader(Headers::AUTHORIZATION, $authorizationHeader);
    }

    private function calculateContentHash(Request $request)
    {
        $content = null;
        if (HttpUtils::usePayloadForQueryParameters($request)) {
            $content = HttpUtils::getCanonicalQueryString($request->getParameters(), true);
        } else if (is_string($request->getContent())) {
            $content = $request->getContent();
        }
        if (isset($content)) {
            return hash('sha256', $content);
        } else {
            return null;
        }
    }

    private function getCanonicalQueryString(Request $request)
    {
        if (HttpUtils::usePayloadForQueryParameters($request)) {
            return '';
        }
        return HttpUtils::getCanonicalQueryString($request->getParameters(), true);
    }

    /**
     * @param $path string
     * @return string
     */
    private function getCanonicalURIPath($path)
    {
        if (empty($path)) {
            return '/';
        } else {
            if ($path[0] == '/') {
                return HttpUtils::urlEncodeExceptSlash($path);
            } else {
                return '/' . HttpUtils::urlEncodeExceptSlash($path);
            }
        }
    }

    /**
     * @param $headers array
     * @return string
     */
    private function getCanonicalHeaders($headers)
    {
        if (count($headers) == 0) {
            return '';
        }

        $headerStrings = array();
        foreach ($headers as $k => $v) {
            if ($k === null) {
                continue;
            }
            if ($v === null) {
                $v = '';
            }
            $headerStrings[] = rawurlencode(
                    strtolower(trim($k))
                ) . ':' . rawurlencode(trim($v));
        }
        sort($headerStrings);

        return implode(self::$headerJoiner, $headerStrings);
    }

    /**
     * @param $headers array
     * @param $headersToSign array
     * @return array
     */
    private function getHeadersToSign($headers, $headersToSign)
    {
        $ret = array();
        if ($headersToSign !== null) {
            $tmp = array();
            foreach ($headersToSign as $header) {
                $tmp[] = strtolower(trim($header));
            }
            $headersToSign = $tmp;
        }
        foreach ($headers as $k => $v) {
            if (trim((string)$v) !== '') {
                if ($headersToSign !== null) {
                    $k = strtolower(trim($k));
                    if (in_array($k, $headersToSign) && $k != trim(Headers::AUTHORIZATION)) {
                        $ret[$k] = $v;
                    }
                }
            }
        }
        return $ret;
    }

    private function computeSignature($canonicalRequest, $privateKey, $digestAlg)
    {
        $signature = null;
        if (openssl_sign($canonicalRequest, $signature, $privateKey, $digestAlg)) {
            return Encodes::base64url_encode($signature) . '$' . $digestAlg;
        }
        throw new YopClientException('compute signature failed.');
    }

    public function checkSignature(YopHttpResponse $httpResponse, $signature, $publicKey, SignOptions $options)
    {
        $content = $httpResponse->readContent();
        $content = str_replace(array(" ", "\n", "\t"), "", $content);
        if (openssl_verify($content, base64_decode($signature), $publicKey, $options->getDigestAlg()) == 1) {
            return;
        }
        throw new VerifySignFailedException("response sign verify failure");
    }


}

RsaSigner::__init();
