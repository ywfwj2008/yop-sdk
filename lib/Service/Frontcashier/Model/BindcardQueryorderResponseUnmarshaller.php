<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardQueryorderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardQueryorderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardQueryorderResponseUnMarshaller();
    }

    /**
     * @return BindcardQueryorderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardQueryorderResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardQueryorderResponse();
    }
}

BindcardQueryorderResponseUnMarshaller::__init();
