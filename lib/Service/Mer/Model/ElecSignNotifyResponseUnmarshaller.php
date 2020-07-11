<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ElecSignNotifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ElecSignNotifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ElecSignNotifyResponseUnMarshaller();
    }

    /**
     * @return ElecSignNotifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ElecSignNotifyResponse
     */
    protected function getResponseInstance()
    {
        return new ElecSignNotifyResponse();
    }
}

ElecSignNotifyResponseUnMarshaller::__init();
