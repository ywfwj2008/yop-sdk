<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardRequestResponseUnMarshaller();
    }

    /**
     * @return BindcardRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardRequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardRequestResponse();
    }
}

BindcardRequestResponseUnMarshaller::__init();
