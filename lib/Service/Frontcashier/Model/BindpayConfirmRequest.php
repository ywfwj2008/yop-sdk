<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BindpayConfirmRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $version;
    /**
     * @var string
     */
    private $verifyCode;
    /**
     * @var string
     */
    private $cardno;
    /**
     * @var string
     */
    private $owner;
    /**
     * @var string
     */
    private $idno;
    /**
     * @var string
     */
    private $phoneNo;
    /**
     * @var string
     */
    private $ypMobile;
    /**
     * @var string
     */
    private $avlidDate;
    /**
     * @var string
     */
    private $cvv2;
    /**
     * @var string
     */
    private $idCardType;
    /**
     * @var string
     */
    private $bankPWD;

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
     * @return BindpayConfirmRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
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
     * @return BindpayConfirmRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets verifyCode
     *
     * @return string
     */
    public function getVerifyCode()
    {
        return $this->verifyCode;
    }

    /**
     * Sets verifyCode
     *
     * @param string $verifyCode
     * @return BindpayConfirmRequest
     */
    public function setVerifyCode($verifyCode)
    {
        $this->verifyCode = $verifyCode;
        return $this;
    }
    /**
     * Gets cardno
     *
     * @return string
     */
    public function getCardno()
    {
        return $this->cardno;
    }

    /**
     * Sets cardno
     *
     * @param string $cardno
     * @return BindpayConfirmRequest
     */
    public function setCardno($cardno)
    {
        $this->cardno = $cardno;
        return $this;
    }
    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets owner
     *
     * @param string $owner
     * @return BindpayConfirmRequest
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }
    /**
     * Gets idno
     *
     * @return string
     */
    public function getIdno()
    {
        return $this->idno;
    }

    /**
     * Sets idno
     *
     * @param string $idno
     * @return BindpayConfirmRequest
     */
    public function setIdno($idno)
    {
        $this->idno = $idno;
        return $this;
    }
    /**
     * Gets phoneNo
     *
     * @return string
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Sets phoneNo
     *
     * @param string $phoneNo
     * @return BindpayConfirmRequest
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }
    /**
     * Gets ypMobile
     *
     * @return string
     */
    public function getYpMobile()
    {
        return $this->ypMobile;
    }

    /**
     * Sets ypMobile
     *
     * @param string $ypMobile
     * @return BindpayConfirmRequest
     */
    public function setYpMobile($ypMobile)
    {
        $this->ypMobile = $ypMobile;
        return $this;
    }
    /**
     * Gets avlidDate
     *
     * @return string
     */
    public function getAvlidDate()
    {
        return $this->avlidDate;
    }

    /**
     * Sets avlidDate
     *
     * @param string $avlidDate
     * @return BindpayConfirmRequest
     */
    public function setAvlidDate($avlidDate)
    {
        $this->avlidDate = $avlidDate;
        return $this;
    }
    /**
     * Gets cvv2
     *
     * @return string
     */
    public function getCvv2()
    {
        return $this->cvv2;
    }

    /**
     * Sets cvv2
     *
     * @param string $cvv2
     * @return BindpayConfirmRequest
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
    /**
     * Gets idCardType
     *
     * @return string
     */
    public function getIdCardType()
    {
        return $this->idCardType;
    }

    /**
     * Sets idCardType
     *
     * @param string $idCardType
     * @return BindpayConfirmRequest
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;
        return $this;
    }
    /**
     * Gets bankPWD
     *
     * @return string
     */
    public function getBankPWD()
    {
        return $this->bankPWD;
    }

    /**
     * Sets bankPWD
     *
     * @param string $bankPWD
     * @return BindpayConfirmRequest
     */
    public function setBankPWD($bankPWD)
    {
        $this->bankPWD = $bankPWD;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindpayConfirm';
    }


}
