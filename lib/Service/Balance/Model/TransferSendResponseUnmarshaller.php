<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferSendResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferSendResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferSendResponseUnMarshaller();
    }

    /**
     * @return TransferSendResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferSendResponse
     */
    protected function getResponseInstance()
    {
        return new TransferSendResponse();
    }
}

TransferSendResponseUnMarshaller::__init();
