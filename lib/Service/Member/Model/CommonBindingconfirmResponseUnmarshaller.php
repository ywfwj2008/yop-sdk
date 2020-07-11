<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonBindingconfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonBindingconfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonBindingconfirmResponseUnMarshaller();
    }

    /**
     * @return CommonBindingconfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonBindingconfirmResponse
     */
    protected function getResponseInstance()
    {
        return new CommonBindingconfirmResponse();
    }
}

CommonBindingconfirmResponseUnMarshaller::__init();
