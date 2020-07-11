<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonRechargeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonRechargeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonRechargeResponseUnMarshaller();
    }

    /**
     * @return CommonRechargeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonRechargeResponse
     */
    protected function getResponseInstance()
    {
        return new CommonRechargeResponse();
    }
}

CommonRechargeResponseUnMarshaller::__init();
