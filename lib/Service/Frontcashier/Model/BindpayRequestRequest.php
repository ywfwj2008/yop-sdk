<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BindpayRequestRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $payMerchantNo;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $bindId;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $userIp;
    /**
     * @var string
     */
    private $version;
    /**
     * @var string
     */
    private $extParamMap;

    /**
     * Gets payMerchantNo
     *
     * @return string
     */
    public function getPayMerchantNo()
    {
        return $this->payMerchantNo;
    }

    /**
     * Sets payMerchantNo
     *
     * @param string $payMerchantNo
     * @return BindpayRequestRequest
     */
    public function setPayMerchantNo($payMerchantNo)
    {
        $this->payMerchantNo = $payMerchantNo;
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
     * @return BindpayRequestRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param string $bindId
     * @return BindpayRequestRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
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
     * @return BindpayRequestRequest
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
     * @return BindpayRequestRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
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
     * @return BindpayRequestRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
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
     * @return BindpayRequestRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
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
     * @return BindpayRequestRequest
     */
    public function setExtParamMap($extParamMap)
    {
        $this->extParamMap = $extParamMap;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindpayRequest';
    }


}
