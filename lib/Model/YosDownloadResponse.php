<?php


namespace Yeepay\Yop\Sdk\Model;


use GuzzleHttp\Psr7\LazyOpenStream;
use Psr\Http\Message\StreamInterface;

class YosDownloadResponse extends BaseResponse
{
    /**
     * @var StreamInterface
     */
    private $result;

    /**
     * @return YopResponseMetadata
     */
    public function getMetadata()
    {
        return parent::getMetadata();
    }

    protected function getMetaDataInstance()
    {
        return new YosDownloadResponseMetadata();
    }

    /**
     * @param $file string|resource
     */
    public function save($file)
    {
        $sink = is_string($file)
            ? new LazyOpenStream($file, 'w+')
            : \GuzzleHttp\Psr7\stream_for($file);
        $contentLength = $this->getMetadata()->getContentLength();
        \GuzzleHttp\Psr7\copy_to_stream(
            $this->result,
            $sink,
            (strlen($contentLength) > 0 && (int)$contentLength > 0) ? (int)$contentLength : -1
        );
        $sink->seek(0);
        $this->result->close();
    }

    function getResultClass()
    {
        return StreamInterface::class;
    }

    /**
     * @param StreamInterface $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }
}
