<?php


namespace Yeepay\Yop\Sdk\Service\Common\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class YopRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $apiUri;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $parameters = array();

    /**
     * @var array
     */
    private $multipartFiles = array();

    /**
     * @var string | resource
     */
    private $content;

    /**
     * YopRequest constructor.
     * @param string $apiUri
     * @param string $method
     */
    public function __construct($apiUri, $method)
    {
        $this->apiUri = $apiUri;
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getApiUri()
    {
        return $this->apiUri;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
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
     * @return YopRequest
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    /**
     * @param string $name
     * @param array $values
     * @return YopRequest
     */
    public function addParameters($name, array $values)
    {
        $this->parameters[$name] = $values;
        return $this;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return YopRequest
     */
    public function addParameter($name, $value)
    {
        if (isset($this->parameters[$name])) {
            $values = $this->parameters[$name];
            $values[] = $value;
        } else {
            $this->parameters[$name] = array($value);
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getMultipartFiles()
    {
        return $this->multipartFiles;
    }

    /**
     * @param string $name
     * @param string|resource $file
     * @return YopRequest
     */
    public function addMultiPartFile($name, $file)
    {
        if (isset($this->multipartFiles[$name])) {
            $values = $this->multipartFiles[$name];
            $values[] = $file;
        } else {
            $this->multipartFiles[$name] = array($file);
        }
        return $this;
    }

    /**
     * @return resource|string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param resource|string $content
     * @return YopRequest
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

}
