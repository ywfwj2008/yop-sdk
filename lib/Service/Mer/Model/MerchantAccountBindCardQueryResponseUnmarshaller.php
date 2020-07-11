<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantAccountBindCardQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantAccountBindCardQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantAccountBindCardQueryResponseUnMarshaller();
    }

    /**
     * @return MerchantAccountBindCardQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantAccountBindCardQueryResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantAccountBindCardQueryResponse();
    }
}

MerchantAccountBindCardQueryResponseUnMarshaller::__init();
