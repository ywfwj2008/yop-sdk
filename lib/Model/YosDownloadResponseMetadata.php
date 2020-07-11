<?php


namespace Yeepay\Yop\Sdk\Model;


class YosDownloadResponseMetadata extends YopResponseMetadata
{
    /**
     * @var float
     */
    private $instanceLength = -1;

    /**
     * @var string
     */
    private $cacheControl;

    /**
     * @var float
     */
    private $appendOffset;

    /**
     * @return float
     */
    public function getInstanceLength()
    {
        return $this->instanceLength;
    }

    /**
     * @param float $instanceLength
     * @return YosDownloadResponseMetadata
     */
    public function setInstanceLength($instanceLength)
    {
        $this->instanceLength = $instanceLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getCacheControl()
    {
        return $this->cacheControl;
    }

    /**
     * @param string $cacheControl
     * @return YosDownloadResponseMetadata
     */
    public function setCacheControl($cacheControl)
    {
        $this->cacheControl = $cacheControl;
        return $this;
    }

    /**
     * @return float
     */
    public function getAppendOffset()
    {
        return $this->appendOffset;
    }

    /**
     * @param float $appendOffset
     * @return YosDownloadResponseMetadata
     */
    public function setAppendOffset($appendOffset)
    {
        $this->appendOffset = $appendOffset;
        return $this;
    }

}
