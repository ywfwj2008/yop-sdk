<?php


namespace Yeepay\Yop\Sdk\Model\Transform;


use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\BaseRequest;

interface RequestMarshaller
{
    /**
     * @param BaseRequest $request
     * @return Request
     */
    public function marshal($request);
}