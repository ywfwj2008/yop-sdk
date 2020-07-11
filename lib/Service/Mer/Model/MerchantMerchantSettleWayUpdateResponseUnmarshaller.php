<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantMerchantSettleWayUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantMerchantSettleWayUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantMerchantSettleWayUpdateResponseUnMarshaller();
    }

    /**
     * @return MerchantMerchantSettleWayUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantMerchantSettleWayUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantMerchantSettleWayUpdateResponse();
    }
}

MerchantMerchantSettleWayUpdateResponseUnMarshaller::__init();
