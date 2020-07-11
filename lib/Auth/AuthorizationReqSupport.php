<?php


namespace Yeepay\Yop\Sdk\Auth;


use Yeepay\Yop\Sdk\Security\DigestAlg;

class AuthorizationReqSupport
{
    /**
     * @var array
     */
    private static $supportedAuthorizationReqs;

    static function init()
    {
        self::$supportedAuthorizationReqs =
            array("YOP-RSA2048-SHA256" => new AuthorizationReq("RSA", "RSA2048", "SHA256withRSA", DigestAlg::SHA256, "YOP-RSA2048-SHA256"),
                "YOP-RSA2048-SHA512" => new AuthorizationReq("RSA", "RSA2048", "SHA512withRSA", DigestAlg::SHA512, "YOP-RSA2048-SHA512"));
    }

    /**
     * @param string $securityReqName
     * @return AuthorizationReq
     */
    static function getAuthorizationReq($securityReqName)
    {
        return self::$supportedAuthorizationReqs[$securityReqName];
    }

}

AuthorizationReqSupport::init();