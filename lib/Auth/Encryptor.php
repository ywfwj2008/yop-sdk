<?php


namespace Yeepay\Yop\Sdk\Auth;


use Yeepay\Yop\Sdk\Internal\Request;

interface Encryptor
{
    /**
     * @param $request
     * @return mixed
     */
    public function encrypt(Request $request);

    /**
     * @param $content
     * @return mixed
     */
    public function decrypt($content);
}