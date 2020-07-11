<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantQuaInfoSupplementResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantQuaInfoSupplementResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQuaInfoSupplementResponseUnMarshaller();
    }

    /**
     * @return MerchantQuaInfoSupplementResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantQuaInfoSupplementResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantQuaInfoSupplementResponse();
    }
}

MerchantQuaInfoSupplementResponseUnMarshaller::__init();
