<?php


namespace Yeepay\Yop\Sdk\Http;


use DateTime;
use Exception;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\StreamInterface;
use Psr\Log\LoggerInterface;
use Yeepay\Yop\Sdk\Log\LogFactory;
use Yeepay\Yop\Sdk\Utils\DateUtils;

class YopHttpResponse
{
    /**
     * @var LoggerInterface
     */
    private static $logger;

    /**
     * @var Response
     */
    private $httpResponse;

    /**
     * @var StreamInterface
     */
    private $stream;

    /**
     * @var string
     */
    private $content;

    public static function __init()
    {
        self::$logger = LogFactory::getLogger(self::class);
    }

    /**
     * YopHttpResponse constructor.
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->httpResponse = $response;
        $this->stream = $response->getBody();
    }

    /**
     * @param string $name
     * @return null | string
     */
    public function getHeader($name)
    {
        $values = $this->httpResponse->getHeader($name);
        if (empty($values)) {
            return null;
        } else {
            return $values[0];
        }
    }

    /**
     * @param string $name
     * @return float
     */
    public function getHeaderAsLong($name)
    {
        $values = $this->httpResponse->getHeader($name);
        if (empty($values)) {
            return -1;
        } else {
            return floatval($values[0]);
        }
    }

    /**
     * @param $name
     * @return DateTime|null
     */
    public function getHeaderAsRFC822Date($name)
    {
        $values = $this->httpResponse->getHeader($name);
        if (empty($values)) {
            return null;
        } else {
            try {
                return DateUtils::parseRfc822Date($values[0]);
            } catch (Exception $e) {
                self::$logger->warning('Invalid ' . $name . ':' . $values[0]);
            }
        }
    }

    /**
     * @return StreamInterface
     */
    public function getContent()
    {
        return $this->stream;
    }

    /**
     * @return string
     */
    public function readContent()
    {
        if (isset($this->content)) {
            return $this->content;
        }
        $this->content = $this->stream->__toString();
        $this->stream->close();
        return $this->content;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->httpResponse->getStatusCode();
    }

    /**
     * @return string
     */
    public function getStatusText()
    {
        return implode(' ', array($this->httpResponse->getProtocolVersion(), $this->httpResponse->getStatusCode(),
            $this->httpResponse->getReasonPhrase()));
    }
}

YopHttpResponse::__init();