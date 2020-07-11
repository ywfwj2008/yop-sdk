<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeDividebackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeDividebackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeDividebackResponseUnMarshaller();
    }

    /**
     * @return TradeDividebackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeDividebackResponse
     */
    protected function getResponseInstance()
    {
        return new TradeDividebackResponse();
    }
}

TradeDividebackResponseUnMarshaller::__init();
