<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PromotionListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PromotionListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PromotionListResponseUnMarshaller();
    }

    /**
     * @return PromotionListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PromotionListResponse
     */
    protected function getResponseInstance()
    {
        return new PromotionListResponse();
    }
}

PromotionListResponseUnMarshaller::__init();
