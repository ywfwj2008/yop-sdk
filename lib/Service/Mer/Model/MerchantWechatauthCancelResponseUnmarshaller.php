<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantWechatauthCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantWechatauthCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantWechatauthCancelResponseUnMarshaller();
    }

    /**
     * @return MerchantWechatauthCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantWechatauthCancelResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantWechatauthCancelResponse();
    }
}

MerchantWechatauthCancelResponseUnMarshaller::__init();
