<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class EntrustConfirmRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $smsCode;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var int
     */
    private $orderValidate;

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
     * @return EntrustConfirmRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
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
     * @return EntrustConfirmRequest
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
     * @return EntrustConfirmRequest
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
     * @return EntrustConfirmRequest
     */
    public function setOrderValidate($orderValidate)
    {
        $this->orderValidate = $orderValidate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'entrustConfirm';
    }


}
