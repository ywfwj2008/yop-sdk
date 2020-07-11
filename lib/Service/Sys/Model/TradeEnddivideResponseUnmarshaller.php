<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeEnddivideResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeEnddivideResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeEnddivideResponseUnMarshaller();
    }

    /**
     * @return TradeEnddivideResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeEnddivideResponse
     */
    protected function getResponseInstance()
    {
        return new TradeEnddivideResponse();
    }
}

TradeEnddivideResponseUnMarshaller::__init();
