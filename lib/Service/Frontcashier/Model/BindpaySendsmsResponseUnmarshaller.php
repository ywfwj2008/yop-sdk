<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindpaySendsmsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindpaySendsmsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindpaySendsmsResponseUnMarshaller();
    }

    /**
     * @return BindpaySendsmsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindpaySendsmsResponse
     */
    protected function getResponseInstance()
    {
        return new BindpaySendsmsResponse();
    }
}

BindpaySendsmsResponseUnMarshaller::__init();
