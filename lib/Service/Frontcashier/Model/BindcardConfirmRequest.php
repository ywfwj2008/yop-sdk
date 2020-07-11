<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BindcardConfirmRequest extends BaseRequest
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
     * @var bool
     */
    private $empower;
    /**
     * @var string
     */
    private $smsCode;

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
     * @return BindcardConfirmRequest
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
     * @return BindcardConfirmRequest
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
     * @return BindcardConfirmRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
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
     * @return BindcardConfirmRequest
     */
    public function setEmpower($empower)
    {
        $this->empower = $empower;
        return $this;
    }
    /**
     * Gets smsCode
     *
     * @return string
     */
    public function getSmsCode()
    {
        return $this->smsCode;
    }

    /**
     * Sets smsCode
     *
     * @param string $smsCode
     * @return BindcardConfirmRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bindcardConfirm';
    }


}
