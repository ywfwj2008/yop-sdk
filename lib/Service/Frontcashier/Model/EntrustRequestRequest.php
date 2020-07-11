<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class EntrustRequestRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $signType;
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
    private $idCardType;
    /**
     * @var string
     */
    private $signSuccessNotifyUrl;
    /**
     * @var float
     */
    private $collectAmount;
    /**
     * @var string
     */
    private $collectBeginDate;
    /**
     * @var string
     */
    private $collectEndDate;
    /**
     * @var int
     */
    private $cycleFrequency;
    /**
     * @var string
     */
    private $cycleStepUnit;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var int
     */
    private $orderValidate;

    /**
     * Gets signType
     *
     * @return string
     */
    public function getSignType()
    {
        return $this->signType;
    }

    /**
     * Sets signType
     *
     * @param string $signType
     * @return EntrustRequestRequest
     */
    public function setSignType($signType)
    {
        $this->signType = $signType;
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
     * @return EntrustRequestRequest
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
     * @return EntrustRequestRequest
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
     * @return EntrustRequestRequest
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
     * @return EntrustRequestRequest
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
     * @return EntrustRequestRequest
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
     * @return EntrustRequestRequest
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
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
     * @return EntrustRequestRequest
     */
    public function setIdCardType($idCardType)
    {
        $this->idCardType = $idCardType;
        return $this;
    }
    /**
     * Gets signSuccessNotifyUrl
     *
     * @return string
     */
    public function getSignSuccessNotifyUrl()
    {
        return $this->signSuccessNotifyUrl;
    }

    /**
     * Sets signSuccessNotifyUrl
     *
     * @param string $signSuccessNotifyUrl
     * @return EntrustRequestRequest
     */
    public function setSignSuccessNotifyUrl($signSuccessNotifyUrl)
    {
        $this->signSuccessNotifyUrl = $signSuccessNotifyUrl;
        return $this;
    }
    /**
     * Gets collectAmount
     *
     * @return float
     */
    public function getCollectAmount()
    {
        return $this->collectAmount;
    }

    /**
     * Sets collectAmount
     *
     * @param float $collectAmount
     * @return EntrustRequestRequest
     */
    public function setCollectAmount($collectAmount)
    {
        $this->collectAmount = $collectAmount;
        return $this;
    }
    /**
     * Gets collectBeginDate
     *
     * @return string
     */
    public function getCollectBeginDate()
    {
        return $this->collectBeginDate;
    }

    /**
     * Sets collectBeginDate
     *
     * @param string $collectBeginDate
     * @return EntrustRequestRequest
     */
    public function setCollectBeginDate($collectBeginDate)
    {
        $this->collectBeginDate = $collectBeginDate;
        return $this;
    }
    /**
     * Gets collectEndDate
     *
     * @return string
     */
    public function getCollectEndDate()
    {
        return $this->collectEndDate;
    }

    /**
     * Sets collectEndDate
     *
     * @param string $collectEndDate
     * @return EntrustRequestRequest
     */
    public function setCollectEndDate($collectEndDate)
    {
        $this->collectEndDate = $collectEndDate;
        return $this;
    }
    /**
     * Gets cycleFrequency
     *
     * @return int
     */
    public function getCycleFrequency()
    {
        return $this->cycleFrequency;
    }

    /**
     * Sets cycleFrequency
     *
     * @param int $cycleFrequency
     * @return EntrustRequestRequest
     */
    public function setCycleFrequency($cycleFrequency)
    {
        $this->cycleFrequency = $cycleFrequency;
        return $this;
    }
    /**
     * Gets cycleStepUnit
     *
     * @return string
     */
    public function getCycleStepUnit()
    {
        return $this->cycleStepUnit;
    }

    /**
     * Sets cycleStepUnit
     *
     * @param string $cycleStepUnit
     * @return EntrustRequestRequest
     */
    public function setCycleStepUnit($cycleStepUnit)
    {
        $this->cycleStepUnit = $cycleStepUnit;
        return $this;
    }
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
     * @return EntrustRequestRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return EntrustRequestRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
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
     * @return EntrustRequestRequest
     */
    public function setOrderValidate($orderValidate)
    {
        $this->orderValidate = $orderValidate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'entrustRequest';
    }


}
