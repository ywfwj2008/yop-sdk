<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonRegisterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonRegisterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonRegisterResponseUnMarshaller();
    }

    /**
     * @return CommonRegisterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonRegisterResponse
     */
    protected function getResponseInstance()
    {
        return new CommonRegisterResponse();
    }
}

CommonRegisterResponseUnMarshaller::__init();
