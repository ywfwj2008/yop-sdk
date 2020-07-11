<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApiOrderpayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApiOrderpayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApiOrderpayResponseUnMarshaller();
    }

    /**
     * @return ApiOrderpayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApiOrderpayResponse
     */
    protected function getResponseInstance()
    {
        return new ApiOrderpayResponse();
    }
}

ApiOrderpayResponseUnMarshaller::__init();
