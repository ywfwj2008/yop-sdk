<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubcompanyTradeOrderqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubcompanyTradeOrderqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubcompanyTradeOrderqueryResponseUnMarshaller();
    }

    /**
     * @return SubcompanyTradeOrderqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubcompanyTradeOrderqueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubcompanyTradeOrderqueryResponse();
    }
}

SubcompanyTradeOrderqueryResponseUnMarshaller::__init();
