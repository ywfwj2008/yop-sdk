<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountTransferTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountTransferTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountTransferTransferResponseUnMarshaller();
    }

    /**
     * @return AccountTransferTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountTransferTransferResponse
     */
    protected function getResponseInstance()
    {
        return new AccountTransferTransferResponse();
    }
}

AccountTransferTransferResponseUnMarshaller::__init();
