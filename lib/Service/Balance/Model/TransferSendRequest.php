<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TransferSendRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $batchNo;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $accountName;
    /**
     * @var string
     */
    private $accountNumber;
    /**
     * @var string
     */
    private $bankCode;
    /**
     * @var string
     */
    private $bankName;
    /**
     * @var string
     */
    private $bankBranchName;
    /**
     * @var string
     */
    private $provinceCode;
    /**
     * @var string
     */
    private $cityCode;
    /**
     * @var string
     */
    private $abstractInfo;
    /**
     * @var string
     */
    private $product;
    /**
     * @var string
     */
    private $feeType;
    /**
     * @var bool
     */
    private $urgency;
    /**
     * @var string
     */
    private $desc;
    /**
     * @var string
     */
    private $leaveWord;
    /**
     * @var string
     */
    private $bankAccountType;

    /**
     * Gets batchNo
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * Sets batchNo
     *
     * @param string $batchNo
     * @return TransferSendRequest
     */
    public function setBatchNo($batchNo)
    {
        $this->batchNo = $batchNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return TransferSendRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
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
     * @return TransferSendRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets accountName
     *
     * @param string $accountName
     * @return TransferSendRequest
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }
    /**
     * Gets accountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets accountNumber
     *
     * @param string $accountNumber
     * @return TransferSendRequest
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode
     * @return TransferSendRequest
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
        return $this;
    }
    /**
     * Gets bankName
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets bankName
     *
     * @param string $bankName
     * @return TransferSendRequest
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }
    /**
     * Gets bankBranchName
     *
     * @return string
     */
    public function getBankBranchName()
    {
        return $this->bankBranchName;
    }

    /**
     * Sets bankBranchName
     *
     * @param string $bankBranchName
     * @return TransferSendRequest
     */
    public function setBankBranchName($bankBranchName)
    {
        $this->bankBranchName = $bankBranchName;
        return $this;
    }
    /**
     * Gets provinceCode
     *
     * @return string
     */
    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * Sets provinceCode
     *
     * @param string $provinceCode
     * @return TransferSendRequest
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
        return $this;
    }
    /**
     * Gets cityCode
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * Sets cityCode
     *
     * @param string $cityCode
     * @return TransferSendRequest
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }
    /**
     * Gets abstractInfo
     *
     * @return string
     */
    public function getAbstractInfo()
    {
        return $this->abstractInfo;
    }

    /**
     * Sets abstractInfo
     *
     * @param string $abstractInfo
     * @return TransferSendRequest
     */
    public function setAbstractInfo($abstractInfo)
    {
        $this->abstractInfo = $abstractInfo;
        return $this;
    }
    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets product
     *
     * @param string $product
     * @return TransferSendRequest
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }
    /**
     * Gets feeType
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->feeType;
    }

    /**
     * Sets feeType
     *
     * @param string $feeType
     * @return TransferSendRequest
     */
    public function setFeeType($feeType)
    {
        $this->feeType = $feeType;
        return $this;
    }
    /**
     * Gets urgency
     *
     * @return bool
     */
    public function getUrgency()
    {
        return $this->urgency;
    }

    /**
     * Sets urgency
     *
     * @param bool $urgency
     * @return TransferSendRequest
     */
    public function setUrgency($urgency)
    {
        $this->urgency = $urgency;
        return $this;
    }
    /**
     * Gets desc
     *
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Sets desc
     *
     * @param string $desc
     * @return TransferSendRequest
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }
    /**
     * Gets leaveWord
     *
     * @return string
     */
    public function getLeaveWord()
    {
        return $this->leaveWord;
    }

    /**
     * Sets leaveWord
     *
     * @param string $leaveWord
     * @return TransferSendRequest
     */
    public function setLeaveWord($leaveWord)
    {
        $this->leaveWord = $leaveWord;
        return $this;
    }
    /**
     * Gets bankAccountType
     *
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bankAccountType;
    }

    /**
     * Sets bankAccountType
     *
     * @param string $bankAccountType
     * @return TransferSendRequest
     */
    public function setBankAccountType($bankAccountType)
    {
        $this->bankAccountType = $bankAccountType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'transferSend';
    }


}
