<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EntrustConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EntrustConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustConfirmResponseUnMarshaller();
    }

    /**
     * @return EntrustConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EntrustConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new EntrustConfirmResponse();
    }
}

EntrustConfirmResponseUnMarshaller::__init();
