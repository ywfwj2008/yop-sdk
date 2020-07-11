<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAccountBindCardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAccountBindCardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAccountBindCardResponseUnMarshaller();
    }

    /**
     * @return MerchantAccountBindCardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAccountBindCardResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantAccountBindCardResponse();
    }
}

MerchantAccountBindCardResponseUnMarshaller::__init();
