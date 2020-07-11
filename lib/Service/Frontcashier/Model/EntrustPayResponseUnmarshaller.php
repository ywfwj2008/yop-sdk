<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EntrustPayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EntrustPayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustPayResponseUnMarshaller();
    }

    /**
     * @return EntrustPayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EntrustPayResponse
     */
    protected function getResponseInstance()
    {
        return new EntrustPayResponse();
    }
}

EntrustPayResponseUnMarshaller::__init();
