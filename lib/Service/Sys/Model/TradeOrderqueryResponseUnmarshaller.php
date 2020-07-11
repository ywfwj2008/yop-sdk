<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrderqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrderqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderqueryResponseUnMarshaller();
    }

    /**
     * @return TradeOrderqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeOrderqueryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeOrderqueryResponse();
    }
}

TradeOrderqueryResponseUnMarshaller::__init();
