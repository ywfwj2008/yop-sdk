<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferBatchSendResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferBatchSendResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferBatchSendResponseUnMarshaller();
    }

    /**
     * @return TransferBatchSendResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferBatchSendResponse
     */
    protected function getResponseInstance()
    {
        return new TransferBatchSendResponse();
    }
}

TransferBatchSendResponseUnMarshaller::__init();
