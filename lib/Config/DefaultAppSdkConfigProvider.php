<?php


namespace Yeepay\Yop\Sdk\Config;


use Yeepay\Yop\Sdk\Exception\YopClientException;

class DefaultAppSdkConfigProvider implements AppSdkConfigProvider
{
    /**
     * @var array
     */
    private $configContainer;

    /**
     * @var AppSdkConfig
     */
    private $default;

    /**
     * DefaultAppSdkConfigProvider constructor.
     * @param $config AppSdkConfig | AppSdkConfig[]
     * @throws YopClientException
     */
    public function __construct($config)
    {
        if ($config instanceof AppSdkConfig) {
            $this->default = $config;
            $this->configContainer = array($config->getAppKey() => $config);
        } else {
            if (empty($config)) {
                throw new YopClientException("config is empty.");
            }
            $this->configContainer = array();
            $this->default = $config[0];
            foreach ($config as $item) {
                $this->configContainer[$item->getAppKey()] = $item;
                if ($item->isDefault()) {
                    $this->default = $item;
                }
            }
        }
    }


    /**
     * @param $appKey string
     * @return AppSdkConfig
     */
    public function getConfig($appKey)
    {
        return $this->configContainer[$appKey];
    }

    /**
     * @return AppSdkConfig
     */
    public function getDefaultConfig()
    {
        return $this->default;
    }

    /**
     * @return array
     */
    public function getAllConfig()
    {
        return $this->configContainer;
    }
}