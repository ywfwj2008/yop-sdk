<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindpayRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindpayRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpayRequestResponseUnMarshaller();
    }

    /**
     * @return BindpayRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindpayRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindpayRequestResponse();
    }
}

BindpayRequestResponseUnMarshaller::__init();
