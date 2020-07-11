<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonUnbindingResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonUnbindingResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonUnbindingResponseUnMarshaller();
    }

    /**
     * @return CommonUnbindingResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonUnbindingResponse
     */
    protected function getResponseInstance()
    {
        return new CommonUnbindingResponse();
    }
}

CommonUnbindingResponseUnMarshaller::__init();
