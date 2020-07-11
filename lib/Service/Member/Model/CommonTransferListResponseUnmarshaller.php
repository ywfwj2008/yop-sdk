<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonTransferListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonTransferListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonTransferListResponseUnMarshaller();
    }

    /**
     * @return CommonTransferListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonTransferListResponse
     */
    protected function getResponseInstance()
    {
        return new CommonTransferListResponse();
    }
}

CommonTransferListResponseUnMarshaller::__init();
