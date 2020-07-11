<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonBindingResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonBindingResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonBindingResponseUnMarshaller();
    }

    /**
     * @return CommonBindingResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonBindingResponse
     */
    protected function getResponseInstance()
    {
        return new CommonBindingResponse();
    }
}

CommonBindingResponseUnMarshaller::__init();
