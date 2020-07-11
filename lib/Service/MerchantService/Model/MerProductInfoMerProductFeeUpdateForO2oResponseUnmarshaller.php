<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerProductInfoMerProductFeeUpdateForO2oResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerProductInfoMerProductFeeUpdateForO2oResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerProductInfoMerProductFeeUpdateForO2oResponseUnMarshaller();
    }

    /**
     * @return MerProductInfoMerProductFeeUpdateForO2oResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerProductInfoMerProductFeeUpdateForO2oResponse
     */
    protected function getResponseInstance()
    {
        return new MerProductInfoMerProductFeeUpdateForO2oResponse();
    }
}

MerProductInfoMerProductFeeUpdateForO2oResponseUnMarshaller::__init();
