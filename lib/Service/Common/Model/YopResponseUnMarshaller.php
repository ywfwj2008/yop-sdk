<?php


namespace Yeepay\Yop\Sdk\Service\Common\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class YopResponseUnMarshaller extends BaseResponseUnMarshaller
{
    /**
     * @return BaseResponse
     */
    protected function getResponseInstance()
    {
        return new YopResponse();
    }
}