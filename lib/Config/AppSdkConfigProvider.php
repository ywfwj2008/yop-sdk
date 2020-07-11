<?php


namespace Yeepay\Yop\Sdk\Config;


interface AppSdkConfigProvider
{
    /**
     * @param $appKey string
     * @return AppSdkConfig
     */
    public function getConfig($appKey);

    /**
     * @return array
     */
    public function getAllConfig();

    /**
     * @return AppSdkConfig
     */
    public function getDefaultConfig();

}