<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BindcardRequestRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
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
    private $bankCardNo;
    /**
     * @var string
     */
    private $userName;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $cvv2;
    /**
     * @var string
     */
    private $validthru;
    /**
     * @var string
     */
    private $riskParamExt;
    /**
     * @var int
     */
    private $orderValidate;
    /**
     * @var string
     */
    private $authType;
    /**
     * @var bool
     */
    private $empower;
    /**
     * @var string
     */
    private $cardType;
    /**
     * @var bool
     */
    private $isSMS;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return BindcardRequestRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return BindcardRequestRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return BindcardRequestRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
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
     * @return BindcardRequestRequest
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
     * @return BindcardRequestRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->bankCardNo;
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo
     * @return BindcardRequestRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }
    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets userName
     *
     * @param string $userName
     * @return BindcardRequestRequest
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return BindcardRequestRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone
     *
     * @param string $phone
     * @return BindcardRequestRequest
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
     * @return BindcardRequestRequest
     */
    public function setCvv2($cvv2)
    {
        $this->cvv2 = $cvv2;
        return $this;
    }
    /**
     * Gets validthru
     *
     * @return string
     */
    public function getValidthru()
    {
        return $this->validthru;
    }

    /**
     * Sets validthru
     *
     * @param string $validthru
     * @return BindcardRequestRequest
     */
    public function setValidthru($validthru)
    {
        $this->validthru = $validthru;
        return $this;
    }
    /**
     * Gets riskParamExt
     *
     * @return string
     */
    public function getRiskParamExt()
    {
        return $this->riskParamExt;
    }

    /**
     * Sets riskParamExt
     *
     * @param string $riskParamExt
     * @return BindcardRequestRequest
     */
    public function setRiskParamExt($riskParamExt)
    {
        $this->riskParamExt = $riskParamExt;
        return $this;
    }
    /**
     * Gets orderValidate
     *
     * @return int
     */
    public function getOrderValidate()
    {
        return $this->orderValidate;
    }

    /**
     * Sets orderValidate
     *
     * @param int $orderValidate
     * @return BindcardRequestRequest
     */
    public function setOrderValidate($orderValidate)
    {
        $this->orderValidate = $orderValidate;
        return $this;
    }
    /**
     * Gets authType
     *
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * Sets authType
     *
     * @param string $authType
     * @return BindcardRequestRequest
     */
    public function setAuthType($authType)
    {
        $this->authType = $authType;
        return $this;
    }
    /**
     * Gets empower
     *
     * @return bool
     */
    public function getEmpower()
    {
        return $this->empower;
    }

    /**
     * Sets empower
     *
     * @param bool $empower
     * @return BindcardRequestRequest
     */
    public function setEmpower($empower)
    {
        $this->empower = $empower;
        return $this;
    }
    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets cardType
     *
     * @param string $cardType
     * @return BindcardRequestRequest
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Gets isSMS
     *
     * @return bool
     */
    public function getIsSMS()
    {
        return $this->isSMS;
    }

    /**
     * Sets isSMS
     *
     * @param bool $isSMS
     * @return BindcardRequestRequest
     */
    public function setIsSMS($isSMS)
    {
        $this->isSMS = $isSMS;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardRequest';
    }


}
