<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountQueryResponseUnMarshaller();
    }

    /**
     * @return AccountQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountQueryResponse();
    }
}

AccountQueryResponseUnMarshaller::__init();
