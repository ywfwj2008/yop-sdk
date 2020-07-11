<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardPayerrequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardPayerrequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardPayerrequestResponseUnMarshaller();
    }

    /**
     * @return BindcardPayerrequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardPayerrequestResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardPayerrequestResponse();
    }
}

BindcardPayerrequestResponseUnMarshaller::__init();
