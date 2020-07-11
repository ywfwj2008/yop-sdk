<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class ApiPayRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $payTool;
    /**
     * @var string
     */
    private $payType;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $openId;
    /**
     * @var string
     */
    private $version;
    /**
     * @var string
     */
    private $payEmpowerNo;
    /**
     * @var string
     */
    private $merchantTerminalId;
    /**
     * @var string
     */
    private $merchantStoreNo;
    /**
     * @var string
     */
    private $userIp;
    /**
     * @var string
     */
    private $extParamMap;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;

    /**
     * Gets payTool
     *
     * @return string
     */
    public function getPayTool()
    {
        return $this->payTool;
    }

    /**
     * Sets payTool
     *
     * @param string $payTool
     * @return ApiPayRequest
     */
    public function setPayTool($payTool)
    {
        $this->payTool = $payTool;
        return $this;
    }
    /**
     * Gets payType
     *
     * @return string
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * Sets payType
     *
     * @param string $payType
     * @return ApiPayRequest
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
        return $this;
    }
    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token
     *
     * @param string $token
     * @return ApiPayRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Gets appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets appId
     *
     * @param string $appId
     * @return ApiPayRequest
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * Gets openId
     *
     * @return string
     */
    public function getOpenId()
    {
        return $this->openId;
    }

    /**
     * Sets openId
     *
     * @param string $openId
     * @return ApiPayRequest
     */
    public function setOpenId($openId)
    {
        $this->openId = $openId;
        return $this;
    }
    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets version
     *
     * @param string $version
     * @return ApiPayRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets payEmpowerNo
     *
     * @return string
     */
    public function getPayEmpowerNo()
    {
        return $this->payEmpowerNo;
    }

    /**
     * Sets payEmpowerNo
     *
     * @param string $payEmpowerNo
     * @return ApiPayRequest
     */
    public function setPayEmpowerNo($payEmpowerNo)
    {
        $this->payEmpowerNo = $payEmpowerNo;
        return $this;
    }
    /**
     * Gets merchantTerminalId
     *
     * @return string
     */
    public function getMerchantTerminalId()
    {
        return $this->merchantTerminalId;
    }

    /**
     * Sets merchantTerminalId
     *
     * @param string $merchantTerminalId
     * @return ApiPayRequest
     */
    public function setMerchantTerminalId($merchantTerminalId)
    {
        $this->merchantTerminalId = $merchantTerminalId;
        return $this;
    }
    /**
     * Gets merchantStoreNo
     *
     * @return string
     */
    public function getMerchantStoreNo()
    {
        return $this->merchantStoreNo;
    }

    /**
     * Sets merchantStoreNo
     *
     * @param string $merchantStoreNo
     * @return ApiPayRequest
     */
    public function setMerchantStoreNo($merchantStoreNo)
    {
        $this->merchantStoreNo = $merchantStoreNo;
        return $this;
    }
    /**
     * Gets userIp
     *
     * @return string
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Sets userIp
     *
     * @param string $userIp
     * @return ApiPayRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets extParamMap
     *
     * @return string
     */
    public function getExtParamMap()
    {
        return $this->extParamMap;
    }

    /**
     * Sets extParamMap
     *
     * @param string $extParamMap
     * @return ApiPayRequest
     */
    public function setExtParamMap($extParamMap)
    {
        $this->extParamMap = $extParamMap;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return ApiPayRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return ApiPayRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'apiPay';
    }


}
