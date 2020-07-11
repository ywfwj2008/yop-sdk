<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeQuerydividebackResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeQuerydividebackResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeQuerydividebackResponseUnMarshaller();
    }

    /**
     * @return TradeQuerydividebackResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeQuerydividebackResponse
     */
    protected function getResponseInstance()
    {
        return new TradeQuerydividebackResponse();
    }
}

TradeQuerydividebackResponseUnMarshaller::__init();
