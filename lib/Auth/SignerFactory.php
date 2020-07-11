<?php


namespace Yeepay\Yop\Sdk\Auth;


use Yeepay\Yop\Sdk\Auth\Signer\RsaSigner;

class SignerFactory
{
    private static $signers = array();

    public static function init()
    {
        self::$signers['RSA'] = new RsaSigner();
    }

    /**
     * @param $signerType string
     * @return Signer
     */
    public static function getSigner($signerType)
    {
        return self::$signers[$signerType];
    }
}

SignerFactory::init();

