<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OpenPayAsyncReportConfigResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OpenPayAsyncReportConfigResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OpenPayAsyncReportConfigResponseUnMarshaller();
    }

    /**
     * @return OpenPayAsyncReportConfigResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OpenPayAsyncReportConfigResponse
     */
    protected function getResponseInstance()
    {
        return new OpenPayAsyncReportConfigResponse();
    }
}

OpenPayAsyncReportConfigResponseUnMarshaller::__init();
