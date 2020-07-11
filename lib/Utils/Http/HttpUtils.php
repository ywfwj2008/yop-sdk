<?php


namespace Yeepay\Yop\Sdk\Utils\Http;


use GuzzleHttp\Psr7\Uri;
use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Http\HttpMethod;
use Yeepay\Yop\Sdk\Internal\Request;

class HttpUtils
{
    private static $defaultPorts;

    private static $PERCENT_ENCODED_STRINGS;

    public static function __init()
    {
        self::$defaultPorts = array("http" => 80, "https" => 443);
        HttpUtils::$PERCENT_ENCODED_STRINGS = array();
        for ($i = 0; $i < 256; ++$i) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[$i] = sprintf("%%%02X", $i);
        }
        foreach (range('a', 'z') as $ch) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[ord($ch)] = $ch;
        }

        foreach (range('A', 'Z') as $ch) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[ord($ch)] = $ch;
        }

        foreach (range('0', '9') as $ch) {
            HttpUtils::$PERCENT_ENCODED_STRINGS[ord($ch)] = $ch;
        }
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('-')] = '-';
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('.')] = '.';
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('_')] = '_';
        HttpUtils::$PERCENT_ENCODED_STRINGS[ord('~')] = '~';
    }


    public static function generateHostHeader(Uri $uri)
    {
        $host = $uri->getHost();
        if (self::isUsingNonDefaultPort($uri)) {
            $host .= ':' . $uri->getPort();
        }
        return $host;
    }

    public static function isUsingNonDefaultPort(Uri $uri)
    {
        $schema = strtolower($uri->getScheme());
        $port = $uri->getPort();
        if (empty($port) && $port < 0) {
            return false;
        }
        return $port != self::$defaultPorts[$schema];
    }

    /**
     * Normalize a string for use in url path. The algorithm is:
     * <p>
     *
     * <ol>
     *   <li>Normalize the string</li>
     *   <li>replace all "%2F" with "/"</li>
     *   <li>replace all "//" with "/%2F"</li>
     * </ol>
     *
     * <p>
     * Bos object key can contain arbitrary characters, which may result double
     * slash in the url path. Apache Http client will replace "//" in the path
     * with a single '/', which makes the object key incorrect. Thus we replace
     * "//" with "/%2F" here.
     *
     * @param $path string the path string to normalize.
     * @return string the normalized path string.
     * @see #normalize(string)
     */
    public static function urlEncodeExceptSlash($path)
    {
        return str_replace("%2F", "/", self::urlEncode($path));
    }

    /**
     * Normalize a string for use in BCE web service APIs. The normalization
     * algorithm is:
     * <p>
     * <ol>
     *   <li>Convert the string into a UTF-8 byte array.</li>
     *   <li>Encode all octets into percent-encoding, except all URI unreserved
     * characters per the RFC 3986.</li>
     * </ol>
     *
     * <p>
     * All letters used in the percent-encoding are in uppercase.
     *
     * @param $value string the string to normalize.
     * @return string the normalized string.
     */
    public static function urlEncode($value)
    {
        $result = '';
        for ($i = 0; $i < strlen($value); ++$i) {
            $result .= self::$PERCENT_ENCODED_STRINGS[ord($value[$i])];
        }
        return $result;
    }

    /**
     * @param $parameters array
     * @param $forSignature bool
     * @return string
     */
    public static function getCanonicalQueryString(array $parameters, $forSignature)
    {
        if (count($parameters) == 0) {
            return '';
        }

        $parameterStrings = array();
        foreach ($parameters as $name => $values) {
            if ($forSignature
                && strcasecmp(Headers::AUTHORIZATION, $name) == 0) {
                continue;
            }
            if (!isset($name)) {
                throw new \InvalidArgumentException(
                    "parameter key should not be null"
                );
            }
            if (empty($values)) {
                if ($forSignature) {
                    $parameterStrings[] = self::urlEncode($name) . '=';
                } else {
                    $parameterStrings[] = self::urlEncode($name);
                }
            } else {
                foreach ($values as $value) {
                    $parameterStrings[] = self::urlEncode($name)
                        . '=' . self::urlEncode($value);
                }
            }

        }
        if ($forSignature) {
            sort($parameterStrings);
        }
        return implode('&', $parameterStrings);
    }


    /**
     * @param array $parameters
     * @return array
     */
    public static function encodedParameters(array $parameters)
    {
        if (empty($parameters)) {
            return array();
        }
        $encodedParameters = array();
        foreach ($parameters as $name => $values) {
            if (empty($values)) {
                $encodedParameters[$name] = '';
            } elseif (count($values) == 1) {
                $encodedParameters[$name] = self::urlEncode($values[0]);
            } else {
                $targetValues = array();
                foreach ($values as $value) {
                    $targetValues[] = self::urlEncode($value);
                }
                $encodedParameters[$name] = $targetValues;
            }
        }
        return $encodedParameters;
    }

    public static function usePayloadForQueryParameters(Request $request)
    {
        $requestIsPOST = HttpMethod::POST == $request->getHttpMethod();
        $requestHasNoPayload = empty($request->getContent());
        return $requestIsPOST && $requestHasNoPayload;
    }

}

HttpUtils::__init();
