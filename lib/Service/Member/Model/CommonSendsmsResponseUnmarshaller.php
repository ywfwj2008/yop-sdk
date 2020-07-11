<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CommonSendsmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CommonSendsmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CommonSendsmsResponseUnMarshaller();
    }

    /**
     * @return CommonSendsmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CommonSendsmsResponse
     */
    protected function getResponseInstance()
    {
        return new CommonSendsmsResponse();
    }
}

CommonSendsmsResponseUnMarshaller::__init();
