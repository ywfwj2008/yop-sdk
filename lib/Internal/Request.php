<?php


namespace Yeepay\Yop\Sdk\Internal;


use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\StreamInterface;

interface Request
{
    /**
     * @return array
     */
    public function getHeaders();

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers);

    /**
     * @param string $name
     * @param string $value
     */
    public function addHeader($name, $value);

    /**
     * @return string
     */
    public function getResourcePath();

    /**
     * @param string $path
     */
    public function setResourcePath($path);

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @param array $parameters
     */
    public function setParameters($parameters);

    /**
     * @param string $name
     * @param array $values
     */
    public function addParameters($name, array $values);

    /**
     * @param string $name
     * @param string $value
     */
    public function addParameter($name, $value);

    /**
     * @return array
     */
    public function getMultipartFiles();

    /**
     * @param string $name
     * @param string|resource $file
     */
    public function addMultiPartFile($name, $file);

    /**
     * @return Uri
     */
    public function getEndpoint();

    /**
     * @param Uri $endpoint
     */
    public function setEndpoint(Uri $endpoint);

    /**
     * @return string
     */
    public function getHttpMethod();

    /**
     * @param string $httpMethod
     */
    public function setHttpMethod($httpMethod);

    /**
     * @return string
     */
    public function getContentType();

    /**
     * @return StreamInterface
     */
    public function getContent();

    /**
     * @param StreamInterface $content
     */
    public function setContent($content);

    /**
     * @return string
     */
    public function getServiceName();

    /**
     * @return bool
     */
    public function getYosFlag();

    /**
     * @param bool $flag
     */
    public function setYosFlag($flag);

}