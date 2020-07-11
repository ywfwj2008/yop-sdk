<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeRefundResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeRefundResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeRefundResponseUnMarshaller();
    }

    /**
     * @return TradeRefundResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeRefundResponse
     */
    protected function getResponseInstance()
    {
        return new TradeRefundResponse();
    }
}

TradeRefundResponseUnMarshaller::__init();
