<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MarketingQueryresultPublicResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MarketingQueryresultPublicResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MarketingQueryresultPublicResponseUnMarshaller();
    }

    /**
     * @return MarketingQueryresultPublicResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MarketingQueryresultPublicResponse
     */
    protected function getResponseInstance()
    {
        return new MarketingQueryresultPublicResponse();
    }
}

MarketingQueryresultPublicResponseUnMarshaller::__init();
