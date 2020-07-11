<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantSettleBankCardInfoUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantSettleBankCardInfoUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantSettleBankCardInfoUpdateResponseUnMarshaller();
    }

    /**
     * @return MerchantSettleBankCardInfoUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantSettleBankCardInfoUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantSettleBankCardInfoUpdateResponse();
    }
}

MerchantSettleBankCardInfoUpdateResponseUnMarshaller::__init();
