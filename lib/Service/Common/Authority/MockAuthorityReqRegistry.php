<?php


namespace Yeepay\Yop\Sdk\Service\Common\Authority;


use Yeepay\Yop\Sdk\Auth\AuthorizationReq;
use Yeepay\Yop\Sdk\Auth\AuthorizationReqRegistry;
use Yeepay\Yop\Sdk\Auth\AuthorizationReqSupport;

class MockAuthorityReqRegistry implements AuthorizationReqRegistry
{

    /**
     * @param $operationId string
     * @return AuthorizationReq
     */
    public function getAuthorizationReq($operationId)
    {
        return AuthorizationReqSupport::getAuthorizationReq('YOP-RSA2048-SHA256');
    }
}