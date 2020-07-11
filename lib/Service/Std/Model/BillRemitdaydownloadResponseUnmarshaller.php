<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillRemitdaydownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillRemitdaydownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillRemitdaydownloadResponseUnMarshaller();
    }

    /**
     * @return BillRemitdaydownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillRemitdaydownloadResponse
     */
    protected function getResponseInstance()
    {
        return new BillRemitdaydownloadResponse();
    }
}

BillRemitdaydownloadResponseUnMarshaller::__init();
