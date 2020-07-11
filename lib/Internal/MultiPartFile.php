<?php


namespace Yeepay\Yop\Sdk\Internal;


use Psr\Http\Message\StreamInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

class MultiPartFile
{

    /**
     * @var string
     */
    private $fileName;

    /**
     * @var StreamInterface
     */
    private $content;

    /**
     * MultiPartFile constructor.
     * @param string|resource $file
     */
    public function __construct($file)
    {
        if (is_string($file)) {
            $this->fileName = ObjectSerializer::sanitizeFilename($file);
            $this->content = \GuzzleHttp\Psr7\stream_for($file);
        } else {
            $meta_data = stream_get_meta_data($file);
            $this->fileName = ObjectSerializer::sanitizeFilename($meta_data['uri']);
            $this->content = \GuzzleHttp\Psr7\stream_for($file);
        }
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return MultiPartFile
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return StreamInterface
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param StreamInterface $content
     * @return MultiPartFile
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

}