<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardConfirmResponseUnMarshaller();
    }

    /**
     * @return BindcardConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardConfirmResponse();
    }
}

BindcardConfirmResponseUnMarshaller::__init();
