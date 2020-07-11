<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantQueryBankCardBinInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantQueryBankCardBinInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQueryBankCardBinInfoResponseUnMarshaller();
    }

    /**
     * @return MerchantQueryBankCardBinInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantQueryBankCardBinInfoResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantQueryBankCardBinInfoResponse();
    }
}

MerchantQueryBankCardBinInfoResponseUnMarshaller::__init();
