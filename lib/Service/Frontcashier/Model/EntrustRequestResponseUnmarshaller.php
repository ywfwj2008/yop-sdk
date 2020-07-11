<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EntrustRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EntrustRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustRequestResponseUnMarshaller();
    }

    /**
     * @return EntrustRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EntrustRequestResponse
     */
    protected function getResponseInstance()
    {
        return new EntrustRequestResponse();
    }
}

EntrustRequestResponseUnMarshaller::__init();
