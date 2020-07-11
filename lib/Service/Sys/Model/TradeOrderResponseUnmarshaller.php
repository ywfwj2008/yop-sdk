<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderResponseUnMarshaller();
    }

    /**
     * @return TradeOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeOrderResponse
     */
    protected function getResponseInstance()
    {
        return new TradeOrderResponse();
    }
}

TradeOrderResponseUnMarshaller::__init();
