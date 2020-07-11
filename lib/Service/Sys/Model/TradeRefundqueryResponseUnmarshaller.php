<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeRefundqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeRefundqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeRefundqueryResponseUnMarshaller();
    }

    /**
     * @return TradeRefundqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeRefundqueryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeRefundqueryResponse();
    }
}

TradeRefundqueryResponseUnMarshaller::__init();
