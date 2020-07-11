<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantProductFeeModifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantProductFeeModifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantProductFeeModifyResponseUnMarshaller();
    }

    /**
     * @return MerchantProductFeeModifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantProductFeeModifyResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantProductFeeModifyResponse();
    }
}

MerchantProductFeeModifyResponseUnMarshaller::__init();
