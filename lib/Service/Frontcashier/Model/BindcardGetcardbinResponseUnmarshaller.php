<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardGetcardbinResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardGetcardbinResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardGetcardbinResponseUnMarshaller();
    }

    /**
     * @return BindcardGetcardbinResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardGetcardbinResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardGetcardbinResponse();
    }
}

BindcardGetcardbinResponseUnMarshaller::__init();
