<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillYfcashdaydownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillYfcashdaydownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillYfcashdaydownloadResponseUnMarshaller();
    }

    /**
     * @return BillYfcashdaydownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillYfcashdaydownloadResponse
     */
    protected function getResponseInstance()
    {
        return new BillYfcashdaydownloadResponse();
    }
}

BillYfcashdaydownloadResponseUnMarshaller::__init();
