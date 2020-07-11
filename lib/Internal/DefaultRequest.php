<?php


namespace Yeepay\Yop\Sdk\Internal;


use GuzzleHttp\Psr7\Uri;
use Psr\Http\Message\StreamInterface;
use Yeepay\Yop\Sdk\Http\Headers;

class DefaultRequest implements Request
{
    /**
     * @var string
     */
    private $resourcePath;

    /**
     * @var array
     */
    private $parameters = array();

    /**
     * @var array
     */
    private $multipartFiles = array();

    /**
     * @var array
     */
    private $headers = array();

    /**
     * @var Uri
     */
    private $endpoint;

    /**
     * @var string
     */
    private $serviceName;

    /**
     * @var string
     */
    private $httpMethod;

    /**
     * @var StreamInterface
     */
    private $content;

    /**
     * @var bool
     */
    private $yosAssigned;

    /**
     * DefaultRequest constructor.
     * @param string $serviceName
     */
    public function __construct($serviceName)
    {
        $this->serviceName = $serviceName;
    }


    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function addHeader($name, $value)
    {
        $this->headers[$name] = $value;
    }

    /**
     * @return string
     */
    public function getResourcePath()
    {
        return $this->resourcePath;
    }

    /**
     * @param string $path
     */
    public function setResourcePath($path)
    {
        $this->resourcePath = $path;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @param string $name
     * @param array $values
     */
    public function addParameters($name, array $values)
    {
        $this->parameters[$name] = $values;
    }

    /**
     * @param string $name
     * @param string $value
     */
    public function addParameter($name, $value)
    {
        if (isset($this->parameters[$name])) {
            $values = $this->parameters[$name];
            $values[] = $value;
        } else {
            $this->parameters[$name] = array($value);
        }
    }

    /**
     * @return array|MultiPartFile
     */
    public function getMultipartFiles()
    {
        return $this->multipartFiles;
    }

    /**
     * @param string $name
     * @param string|resource $file
     */
    public function addMultiPartFile($name, $file)
    {
        if (isset($this->multipartFiles[$name])) {
            $values = $this->multipartFiles[$name];
            $values[] = new MultiPartFile($file);
        } else {
            $this->multipartFiles[$name] = array(new MultiPartFile($file));
        }
    }

    /**
     * @return Uri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param Uri $endpoint
     */
    public function setEndpoint(Uri $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /**
     * @param string $httpMethod
     */
    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->headers[Headers::CONTENT_TYPE];
    }

    /**
     * @return StreamInterface
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param $content StreamInterface
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @return bool
     */
    public function getYosFlag()
    {
        return $this->yosAssigned;
    }

    /**
     * @param $flag bool
     */
    public function setYosFlag($flag)
    {
        $this->yosAssigned = $flag;
    }

}
