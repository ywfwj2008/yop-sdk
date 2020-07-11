<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonRegisterRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNo;
    /**
     * @var string
     */
    private $platformUserNo;
    /**
     * @var string
     */
    private $regType;
    /**
     * @var string
     */
    private $loginName;
    /**
     * @var string
     */
    private $loginPassword;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $regIp;
    /**
     * @var string
     */
    private $memberType;
    /**
     * @var string
     */
    private $tradePassword;
    /**
     * @var string
     */
    private $mobile;

    /**
     * Gets customerNo
     *
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * Sets customerNo
     *
     * @param string $customerNo
     * @return CommonRegisterRequest
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        return $this;
    }
    /**
     * Gets platformUserNo
     *
     * @return string
     */
    public function getPlatformUserNo()
    {
        return $this->platformUserNo;
    }

    /**
     * Sets platformUserNo
     *
     * @param string $platformUserNo
     * @return CommonRegisterRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
        return $this;
    }
    /**
     * Gets regType
     *
     * @return string
     */
    public function getRegType()
    {
        return $this->regType;
    }

    /**
     * Sets regType
     *
     * @param string $regType
     * @return CommonRegisterRequest
     */
    public function setRegType($regType)
    {
        $this->regType = $regType;
        return $this;
    }
    /**
     * Gets loginName
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Sets loginName
     *
     * @param string $loginName
     * @return CommonRegisterRequest
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
        return $this;
    }
    /**
     * Gets loginPassword
     *
     * @return string
     */
    public function getLoginPassword()
    {
        return $this->loginPassword;
    }

    /**
     * Sets loginPassword
     *
     * @param string $loginPassword
     * @return CommonRegisterRequest
     */
    public function setLoginPassword($loginPassword)
    {
        $this->loginPassword = $loginPassword;
        return $this;
    }
    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets email
     *
     * @param string $email
     * @return CommonRegisterRequest
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Gets regIp
     *
     * @return string
     */
    public function getRegIp()
    {
        return $this->regIp;
    }

    /**
     * Sets regIp
     *
     * @param string $regIp
     * @return CommonRegisterRequest
     */
    public function setRegIp($regIp)
    {
        $this->regIp = $regIp;
        return $this;
    }
    /**
     * Gets memberType
     *
     * @return string
     */
    public function getMemberType()
    {
        return $this->memberType;
    }

    /**
     * Sets memberType
     *
     * @param string $memberType
     * @return CommonRegisterRequest
     */
    public function setMemberType($memberType)
    {
        $this->memberType = $memberType;
        return $this;
    }
    /**
     * Gets tradePassword
     *
     * @return string
     */
    public function getTradePassword()
    {
        return $this->tradePassword;
    }

    /**
     * Sets tradePassword
     *
     * @param string $tradePassword
     * @return CommonRegisterRequest
     */
    public function setTradePassword($tradePassword)
    {
        $this->tradePassword = $tradePassword;
        return $this;
    }
    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return CommonRegisterRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonRegister';
    }


}
