<?php


namespace Yeepay\Yop\Sdk\Exception;


class YopServiceException extends YopClientException
{
    const ERROR_TYPE_CLIENT = 'Client';

    const ERROR_TYPE_SERVICE = 'Service';

    const ERROR_TYPE_UNKNOWN = 'Unknown';

    /**
     * @var string
     */
    private $requestId;

    /**
     * @var string
     */
    private $errorCode;

    /**
     * @var string
     */
    private $subErrorCode;

    /**
     * @var string
     */
    private $errorType = self::ERROR_TYPE_UNKNOWN;

    /**
     * @var string
     */
    private $errorMessage;

    /**
     * @var string
     */
    private $subErrorMessage;

    /**
     * @var int
     */
    private $statusCode;

    /**
     * YopServiceException constructor.
     * @param $errorMessage
     * @param string $errorCode
     */
    public function __construct($errorMessage, $errorCode = '')
    {
        parent::__construct($errorMessage);
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return YopServiceException
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     * @return YopServiceException
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubErrorCode()
    {
        return $this->subErrorCode;
    }

    /**
     * @param string $subErrorCode
     * @return YopServiceException
     */
    public function setSubErrorCode($subErrorCode)
    {
        $this->subErrorCode = $subErrorCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorType()
    {
        return $this->errorType;
    }

    /**
     * @param string $errorType
     * @return YopServiceException
     */
    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return YopServiceException
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubErrorMessage()
    {
        return $this->subErrorMessage;
    }

    /**
     * @param string $subErrorMessage
     * @return YopServiceException
     */
    public function setSubErrorMessage($subErrorMessage)
    {
        $this->subErrorMessage = $subErrorMessage;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return YopServiceException
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

}