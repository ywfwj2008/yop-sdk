<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillYftradedaydownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillYftradedaydownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillYftradedaydownloadResponseUnMarshaller();
    }

    /**
     * @return BillYftradedaydownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillYftradedaydownloadResponse
     */
    protected function getResponseInstance()
    {
        return new BillYftradedaydownloadResponse();
    }
}

BillYftradedaydownloadResponseUnMarshaller::__init();
