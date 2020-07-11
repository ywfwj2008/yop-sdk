<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonQueryaccountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonQueryaccountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonQueryaccountResponseUnMarshaller();
    }

    /**
     * @return CommonQueryaccountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonQueryaccountResponse
     */
    protected function getResponseInstance()
    {
        return new CommonQueryaccountResponse();
    }
}

CommonQueryaccountResponseUnMarshaller::__init();
