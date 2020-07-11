<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromotionUpdateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromotionUpdateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromotionUpdateResponseUnMarshaller();
    }

    /**
     * @return PromotionUpdateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromotionUpdateResponse
     */
    protected function getResponseInstance()
    {
        return new PromotionUpdateResponse();
    }
}

PromotionUpdateResponseUnMarshaller::__init();
