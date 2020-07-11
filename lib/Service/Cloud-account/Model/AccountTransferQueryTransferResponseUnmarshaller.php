<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountTransferQueryTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountTransferQueryTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountTransferQueryTransferResponseUnMarshaller();
    }

    /**
     * @return AccountTransferQueryTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountTransferQueryTransferResponse
     */
    protected function getResponseInstance()
    {
        return new AccountTransferQueryTransferResponse();
    }
}

AccountTransferQueryTransferResponseUnMarshaller::__init();
