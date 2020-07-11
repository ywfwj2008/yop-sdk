<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrdercloseResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrdercloseResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrdercloseResponseUnMarshaller();
    }

    /**
     * @return TradeOrdercloseResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeOrdercloseResponse
     */
    protected function getResponseInstance()
    {
        return new TradeOrdercloseResponse();
    }
}

TradeOrdercloseResponseUnMarshaller::__init();
