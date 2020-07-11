<?php


namespace Yeepay\Yop\Sdk\Model\Transform;


use Yeepay\Yop\Sdk\Http\YopHttpResponse;

interface ResponseUnMarshaller
{
    /**
     * @param $yopHttpResponse YopHttpResponse
     * @param ResponseUnMarshalParams $params
     * @return mixed
     */
    public function unmarshal(YopHttpResponse $yopHttpResponse, ResponseUnMarshalParams $params);
}