<?php


namespace Yeepay\Yop\Sdk\Model;


class YopErrorResponse
{
    /**
     * @var string
     */
    private $requestId;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $subCode;

    /**
     * @var string
     */
    private $subMessage;

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return YopErrorResponse
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return YopErrorResponse
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return YopErrorResponse
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubCode()
    {
        return $this->subCode;
    }

    /**
     * @param string $subCode
     * @return YopErrorResponse
     */
    public function setSubCode($subCode)
    {
        $this->subCode = $subCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubMessage()
    {
        return $this->subMessage;
    }

    /**
     * @param string $subMessage
     * @return YopErrorResponse
     */
    public function setSubMessage($subMessage)
    {
        $this->subMessage = $subMessage;
        return $this;
    }




}