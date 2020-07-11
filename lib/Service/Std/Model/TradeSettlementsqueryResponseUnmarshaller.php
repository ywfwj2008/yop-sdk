<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeSettlementsqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeSettlementsqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeSettlementsqueryResponseUnMarshaller();
    }

    /**
     * @return TradeSettlementsqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeSettlementsqueryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeSettlementsqueryResponse();
    }
}

TradeSettlementsqueryResponseUnMarshaller::__init();
