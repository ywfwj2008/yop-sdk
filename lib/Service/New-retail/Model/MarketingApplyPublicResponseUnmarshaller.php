<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MarketingApplyPublicResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MarketingApplyPublicResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MarketingApplyPublicResponseUnMarshaller();
    }

    /**
     * @return MarketingApplyPublicResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MarketingApplyPublicResponse
     */
    protected function getResponseInstance()
    {
        return new MarketingApplyPublicResponse();
    }
}

MarketingApplyPublicResponseUnMarshaller::__init();
