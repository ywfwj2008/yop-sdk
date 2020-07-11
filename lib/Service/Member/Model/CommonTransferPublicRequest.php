<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonTransferPublicRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNo;
    /**
     * @var string
     */
    private $orderNo;
    /**
     * @var string
     */
    private $platformUserNo;
    /**
     * @var string
     */
    private $targetPlatformUserNo;
    /**
     * @var string
     */
    private $amount;
    /**
     * @var bool
     */
    private $needCalFee;

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
     * @return CommonTransferPublicRequest
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        return $this;
    }
    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo
     * @return CommonTransferPublicRequest
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
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
     * @return CommonTransferPublicRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
        return $this;
    }
    /**
     * Gets targetPlatformUserNo
     *
     * @return string
     */
    public function getTargetPlatformUserNo()
    {
        return $this->targetPlatformUserNo;
    }

    /**
     * Sets targetPlatformUserNo
     *
     * @param string $targetPlatformUserNo
     * @return CommonTransferPublicRequest
     */
    public function setTargetPlatformUserNo($targetPlatformUserNo)
    {
        $this->targetPlatformUserNo = $targetPlatformUserNo;
        return $this;
    }
    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param string $amount
     * @return CommonTransferPublicRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets needCalFee
     *
     * @return bool
     */
    public function getNeedCalFee()
    {
        return $this->needCalFee;
    }

    /**
     * Sets needCalFee
     *
     * @param bool $needCalFee
     * @return CommonTransferPublicRequest
     */
    public function setNeedCalFee($needCalFee)
    {
        $this->needCalFee = $needCalFee;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonTransferPublic';
    }


}
