<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ModifyPayProductInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ModifyPayProductInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ModifyPayProductInfoResponseUnMarshaller();
    }

    /**
     * @return ModifyPayProductInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ModifyPayProductInfoResponse
     */
    protected function getResponseInstance()
    {
        return new ModifyPayProductInfoResponse();
    }
}

ModifyPayProductInfoResponseUnMarshaller::__init();
