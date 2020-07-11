<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantWechatauthQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantWechatauthQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantWechatauthQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantWechatauthQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantWechatauthQueryResponse();
    }
}

MerchantWechatauthQueryResponseUnMarshaller::__init();
