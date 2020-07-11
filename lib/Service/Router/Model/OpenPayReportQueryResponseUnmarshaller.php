<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenPayReportQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenPayReportQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenPayReportQueryResponseUnMarshaller();
    }

    /**
     * @return OpenPayReportQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenPayReportQueryResponse
     */
    protected function getResponseInstance()
    {
        return new OpenPayReportQueryResponse();
    }
}

OpenPayReportQueryResponseUnMarshaller::__init();
