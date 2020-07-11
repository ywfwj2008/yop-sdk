<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenPayAsyncReportReportResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenPayAsyncReportReportResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenPayAsyncReportReportResponseUnMarshaller();
    }

    /**
     * @return OpenPayAsyncReportReportResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenPayAsyncReportReportResponse
     */
    protected function getResponseInstance()
    {
        return new OpenPayAsyncReportReportResponse();
    }
}

OpenPayAsyncReportReportResponseUnMarshaller::__init();
