<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerOutInvokeSendMerSmsNotifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerOutInvokeSendMerSmsNotifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerOutInvokeSendMerSmsNotifyResponseUnMarshaller();
    }

    /**
     * @return MerOutInvokeSendMerSmsNotifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerOutInvokeSendMerSmsNotifyResponse
     */
    protected function getResponseInstance()
    {
        return new MerOutInvokeSendMerSmsNotifyResponse();
    }
}

MerOutInvokeSendMerSmsNotifyResponseUnMarshaller::__init();
