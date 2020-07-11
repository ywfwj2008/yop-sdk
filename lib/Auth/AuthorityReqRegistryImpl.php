<?php


namespace Yeepay\Yop\Sdk\Auth;


class AuthorityReqRegistryImpl implements AuthorizationReqRegistry
{
    private $authorizationReqs = array();

    /**
     * @param $operationId string
     * @param $securityReq AuthorizationReq
     * @return $this
     */
    public function register($operationId, $securityReq)
    {
        $this->authorizationReqs[$operationId] = $securityReq;
        return $this;
    }

    public function getAuthorizationReq($operationId)
    {
        return $this->authorizationReqs[$operationId];
    }
}