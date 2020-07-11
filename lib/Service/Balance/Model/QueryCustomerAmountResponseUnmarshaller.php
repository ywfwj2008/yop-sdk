<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryCustomerAmountResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryCustomerAmountResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryCustomerAmountResponseUnMarshaller();
    }

    /**
     * @return QueryCustomerAmountResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryCustomerAmountResponse
     */
    protected function getResponseInstance()
    {
        return new QueryCustomerAmountResponse();
    }
}

QueryCustomerAmountResponseUnMarshaller::__init();
