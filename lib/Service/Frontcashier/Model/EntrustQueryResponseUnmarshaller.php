<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EntrustQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EntrustQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EntrustQueryResponseUnMarshaller();
    }

    /**
     * @return EntrustQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EntrustQueryResponse
     */
    protected function getResponseInstance()
    {
        return new EntrustQueryResponse();
    }
}

EntrustQueryResponseUnMarshaller::__init();
