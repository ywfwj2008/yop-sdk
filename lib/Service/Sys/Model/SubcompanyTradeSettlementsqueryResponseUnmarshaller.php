<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubcompanyTradeSettlementsqueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubcompanyTradeSettlementsqueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubcompanyTradeSettlementsqueryResponseUnMarshaller();
    }

    /**
     * @return SubcompanyTradeSettlementsqueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubcompanyTradeSettlementsqueryResponse
     */
    protected function getResponseInstance()
    {
        return new SubcompanyTradeSettlementsqueryResponse();
    }
}

SubcompanyTradeSettlementsqueryResponseUnMarshaller::__init();
