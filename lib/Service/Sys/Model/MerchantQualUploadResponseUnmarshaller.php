<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MerchantQualUploadResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MerchantQualUploadResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MerchantQualUploadResponseUnMarshaller();
    }

    /**
     * @return MerchantQualUploadResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MerchantQualUploadResponse
     */
    protected function getResponseInstance()
    {
        return new MerchantQualUploadResponse();
    }
}

MerchantQualUploadResponseUnMarshaller::__init();
