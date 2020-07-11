<?php


namespace Yeepay\Yop\Sdk\Security\Aes;


class AesEncryptor
{
    private static $AES_METHOD = 'aes-256-cbc';

    private static $AES_IV;

    public static function init()
    {
        $str = '';
        for ($i = 0; $i < 16; $i++) {
            $str .= chr(0);
        }
        self::$AES_IV = $str;
    }

    public static function encryptAndEncodeBase64($data, $key)
    {
        return base64_encode(openssl_encrypt($data, self::$AES_METHOD, $key, OPENSSL_RAW_DATA, self::$AES_IV));
    }

    public static function decodeBase64AndDecrypt($base64EncodedData, $key)
    {
        return openssl_decrypt(base64_decode($base64EncodedData), self::$AES_METHOD, $key, OPENSSL_RAW_DATA, self::$AES_IV);
    }

}

AesEncryptor::init();
