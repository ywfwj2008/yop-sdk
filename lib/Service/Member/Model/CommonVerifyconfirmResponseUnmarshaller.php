<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonVerifyconfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonVerifyconfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonVerifyconfirmResponseUnMarshaller();
    }

    /**
     * @return CommonVerifyconfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonVerifyconfirmResponse
     */
    protected function getResponseInstance()
    {
        return new CommonVerifyconfirmResponse();
    }
}

CommonVerifyconfirmResponseUnMarshaller::__init();
