<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromotionCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromotionCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromotionCreateResponseUnMarshaller();
    }

    /**
     * @return PromotionCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromotionCreateResponse
     */
    protected function getResponseInstance()
    {
        return new PromotionCreateResponse();
    }
}

PromotionCreateResponseUnMarshaller::__init();
