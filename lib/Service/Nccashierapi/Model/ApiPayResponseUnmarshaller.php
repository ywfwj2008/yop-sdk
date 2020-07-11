<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ApiPayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ApiPayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ApiPayResponseUnMarshaller();
    }

    /**
     * @return ApiPayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ApiPayResponse
     */
    protected function getResponseInstance()
    {
        return new ApiPayResponse();
    }
}

ApiPayResponseUnMarshaller::__init();
