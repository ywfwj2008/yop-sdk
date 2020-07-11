<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class AccountTransferTransferRequest extends BaseRequest
{
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $creditCustomerNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $usage;

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param float $amount
     * @return AccountTransferTransferRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets creditCustomerNo
     *
     * @return string
     */
    public function getCreditCustomerNo()
    {
        return $this->creditCustomerNo;
    }

    /**
     * Sets creditCustomerNo
     *
     * @param string $creditCustomerNo
     * @return AccountTransferTransferRequest
     */
    public function setCreditCustomerNo($creditCustomerNo)
    {
        $this->creditCustomerNo = $creditCustomerNo;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return AccountTransferTransferRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets usage
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets usage
     *
     * @param string $usage
     * @return AccountTransferTransferRequest
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountTransferTransfer';
    }


}
