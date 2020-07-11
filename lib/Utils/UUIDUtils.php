<?php


namespace Yeepay\Yop\Sdk\Utils;


class UUIDUtils
{
    public static function uuid($namespace = '')
    {
        $uid = uniqid("", true);
        $data = $_SERVER['REQUEST_TIME'];
        $hash = hash('ripemd128', $uid . $data);

        $guid = $namespace .
            substr($uid, 0, 14) .
            substr($uid, 15, 24) .
            substr($hash, 0, 10) .
            '';
        return $guid;
    }

}