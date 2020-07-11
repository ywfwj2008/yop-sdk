<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeMultiorderqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeMultiorderqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeMultiorderqueryResponseUnMarshaller();
    }

    /**
     * @return TradeMultiorderqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeMultiorderqueryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeMultiorderqueryResponse();
    }
}

TradeMultiorderqueryResponseUnMarshaller::__init();
