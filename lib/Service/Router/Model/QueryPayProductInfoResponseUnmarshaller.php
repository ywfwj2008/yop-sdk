<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryPayProductInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryPayProductInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryPayProductInfoResponseUnMarshaller();
    }

    /**
     * @return QueryPayProductInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryPayProductInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryPayProductInfoResponse();
    }
}

QueryPayProductInfoResponseUnMarshaller::__init();
