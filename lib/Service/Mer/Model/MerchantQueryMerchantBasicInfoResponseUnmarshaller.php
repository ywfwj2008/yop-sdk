<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantQueryMerchantBasicInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantQueryMerchantBasicInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQueryMerchantBasicInfoResponseUnMarshaller();
    }

    /**
     * @return MerchantQueryMerchantBasicInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantQueryMerchantBasicInfoResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantQueryMerchantBasicInfoResponse();
    }
}

MerchantQueryMerchantBasicInfoResponseUnMarshaller::__init();
