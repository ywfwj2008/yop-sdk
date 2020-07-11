<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubcompanyTradeOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubcompanyTradeOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubcompanyTradeOrderResponseUnMarshaller();
    }

    /**
     * @return SubcompanyTradeOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubcompanyTradeOrderResponse
     */
    protected function getResponseInstance()
    {
        return new SubcompanyTradeOrderResponse();
    }
}

SubcompanyTradeOrderResponseUnMarshaller::__init();
