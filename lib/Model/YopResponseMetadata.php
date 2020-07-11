<?php


namespace Yeepay\Yop\Sdk\Model;


use DateTime;

class YopResponseMetadata
{
    /**
     * @var string
     */
    private $yopRequestId;

    /**
     * @var string
     */
    private $yopSign;

    /**
     * @var string
     */
    private $yopContentSha256;

    /**
     * @var string
     */
    private $yopVia;

    /**
     * @var string
     */
    private $contentDisposition;

    /**
     * @var string
     */
    private $transferEncoding;

    /**
     * @var string
     */
    private $contentEncoding;

    /**
     * @var float
     */
    private $contentLength = -1;

    /**
     * @var string
     */
    private $contentMd5;

    /**
     * @var string
     */
    private $contentRange;

    /**
     * @var string
     */
    private $contentType;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $etag;

    /**
     * @var DateTime
     */
    private $expires;

    /**
     * @var DateTime
     */
    private $lastModified;

    /**
     * @var string
     */
    private $server;

    /**
     * @var string
     */
    private $location;

    /**
     * @return string
     */
    public function getYopRequestId()
    {
        return $this->yopRequestId;
    }

    /**
     * @param string $yopRequestId
     * @return YopResponseMetadata
     */
    public function setYopRequestId($yopRequestId)
    {
        $this->yopRequestId = $yopRequestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getYopSign()
    {
        return $this->yopSign;
    }

    /**
     * @param string $yopSign
     * @return YopResponseMetadata
     */
    public function setYopSign($yopSign)
    {
        $this->yopSign = $yopSign;
        return $this;
    }

    /**
     * @return string
     */
    public function getYopContentSha256()
    {
        return $this->yopContentSha256;
    }

    /**
     * @param string $yopContentSha256
     * @return YopResponseMetadata
     */
    public function setYopContentSha256($yopContentSha256)
    {
        $this->yopContentSha256 = $yopContentSha256;
        return $this;
    }

    /**
     * @return string
     */
    public function getYopVia()
    {
        return $this->yopVia;
    }

    /**
     * @param string $yopVia
     * @return YopResponseMetadata
     */
    public function setYopVia($yopVia)
    {
        $this->yopVia = $yopVia;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentDisposition()
    {
        return $this->contentDisposition;
    }

    /**
     * @param string $contentDisposition
     * @return YopResponseMetadata
     */
    public function setContentDisposition($contentDisposition)
    {
        $this->contentDisposition = $contentDisposition;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransferEncoding()
    {
        return $this->transferEncoding;
    }

    /**
     * @param string $transferEncoding
     * @return YopResponseMetadata
     */
    public function setTransferEncoding($transferEncoding)
    {
        $this->transferEncoding = $transferEncoding;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentEncoding()
    {
        return $this->contentEncoding;
    }

    /**
     * @param string $contentEncoding
     * @return YopResponseMetadata
     */
    public function setContentEncoding($contentEncoding)
    {
        $this->contentEncoding = $contentEncoding;
        return $this;
    }

    /**
     * @return float
     */
    public function getContentLength()
    {
        return $this->contentLength;
    }

    /**
     * @param float $contentLength
     * @return YopResponseMetadata
     */
    public function setContentLength($contentLength)
    {
        $this->contentLength = $contentLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentMd5()
    {
        return $this->contentMd5;
    }

    /**
     * @param string $contentMd5
     * @return YopResponseMetadata
     */
    public function setContentMd5($contentMd5)
    {
        $this->contentMd5 = $contentMd5;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentRange()
    {
        return $this->contentRange;
    }

    /**
     * @param string $contentRange
     * @return YopResponseMetadata
     */
    public function setContentRange($contentRange)
    {
        $this->contentRange = $contentRange;
        return $this;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param string $contentType
     * @return YopResponseMetadata
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return YopResponseMetadata
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * @param string $etag
     * @return YopResponseMetadata
     */
    public function setEtag($etag)
    {
        $this->etag = $etag;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param DateTime $expires
     * @return YopResponseMetadata
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * @param DateTime $lastModified
     * @return YopResponseMetadata
     */
    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
        return $this;
    }

    /**
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @param string $server
     * @return YopResponseMetadata
     */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return YopResponseMetadata
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }


}