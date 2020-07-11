<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillCashdaydownloadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillCashdaydownloadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillCashdaydownloadResponseUnMarshaller();
    }

    /**
     * @return BillCashdaydownloadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillCashdaydownloadResponse
     */
    protected function getResponseInstance()
    {
        return new BillCashdaydownloadResponse();
    }
}

BillCashdaydownloadResponseUnMarshaller::__init();
