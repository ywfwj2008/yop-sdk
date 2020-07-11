<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonVerifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonVerifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonVerifyResponseUnMarshaller();
    }

    /**
     * @return CommonVerifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonVerifyResponse
     */
    protected function getResponseInstance()
    {
        return new CommonVerifyResponse();
    }
}

CommonVerifyResponseUnMarshaller::__init();
