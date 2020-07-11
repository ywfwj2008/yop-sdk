<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindpayConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindpayConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpayConfirmResponseUnMarshaller();
    }

    /**
     * @return BindpayConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindpayConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BindpayConfirmResponse();
    }
}

BindpayConfirmResponseUnMarshaller::__init();
