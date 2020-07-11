<?php


namespace Yeepay\Yop\Sdk\Model;


abstract class BaseResponse
{
    /**
     * @var YopResponseMetadata
     */
    private $metadata;

    /**
     * BaseResponse constructor.
     */
    public function __construct()
    {
        $this->metadata = $this->getMetaDataInstance();
    }

    /**
     * @return YopResponseMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @return YopResponseMetadata
     */
    protected function getMetaDataInstance()
    {
        return new YopResponseMetadata();
    }

    abstract function getResultClass();

    /**
     * @param mixed $result
     */
    abstract function setResult($result);

}