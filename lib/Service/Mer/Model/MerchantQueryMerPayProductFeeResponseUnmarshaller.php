<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantQueryMerPayProductFeeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantQueryMerPayProductFeeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQueryMerPayProductFeeResponseUnMarshaller();
    }

    /**
     * @return MerchantQueryMerPayProductFeeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantQueryMerPayProductFeeResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantQueryMerPayProductFeeResponse();
    }
}

MerchantQueryMerPayProductFeeResponseUnMarshaller::__init();
