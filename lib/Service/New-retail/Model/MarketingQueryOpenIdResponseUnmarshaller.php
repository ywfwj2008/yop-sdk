<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MarketingQueryOpenIdResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MarketingQueryOpenIdResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MarketingQueryOpenIdResponseUnMarshaller();
    }

    /**
     * @return MarketingQueryOpenIdResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MarketingQueryOpenIdResponse
     */
    protected function getResponseInstance()
    {
        return new MarketingQueryOpenIdResponse();
    }
}

MarketingQueryOpenIdResponseUnMarshaller::__init();
