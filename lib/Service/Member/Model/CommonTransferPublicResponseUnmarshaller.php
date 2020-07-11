<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonTransferPublicResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonTransferPublicResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonTransferPublicResponseUnMarshaller();
    }

    /**
     * @return CommonTransferPublicResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonTransferPublicResponse
     */
    protected function getResponseInstance()
    {
        return new CommonTransferPublicResponse();
    }
}

CommonTransferPublicResponseUnMarshaller::__init();
