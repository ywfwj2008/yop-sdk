<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantAccountBindCardRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $bankCardType;
    /**
     * @var string
     */
    private $bankId;
    /**
     * @var string
     */
    private $branchBankCode;
    /**
     * @var string
     */
    private $bankActId;
    /**
     * @var string
     */
    private $accountName;

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
     * @return MerchantAccountBindCardRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return MerchantAccountBindCardRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets bankCardType
     *
     * @return string
     */
    public function getBankCardType()
    {
        return $this->bankCardType;
    }

    /**
     * Sets bankCardType
     *
     * @param string $bankCardType
     * @return MerchantAccountBindCardRequest
     */
    public function setBankCardType($bankCardType)
    {
        $this->bankCardType = $bankCardType;
        return $this;
    }
    /**
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Sets bankId
     *
     * @param string $bankId
     * @return MerchantAccountBindCardRequest
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
        return $this;
    }
    /**
     * Gets branchBankCode
     *
     * @return string
     */
    public function getBranchBankCode()
    {
        return $this->branchBankCode;
    }

    /**
     * Sets branchBankCode
     *
     * @param string $branchBankCode
     * @return MerchantAccountBindCardRequest
     */
    public function setBranchBankCode($branchBankCode)
    {
        $this->branchBankCode = $branchBankCode;
        return $this;
    }
    /**
     * Gets bankActId
     *
     * @return string
     */
    public function getBankActId()
    {
        return $this->bankActId;
    }

    /**
     * Sets bankActId
     *
     * @param string $bankActId
     * @return MerchantAccountBindCardRequest
     */
    public function setBankActId($bankActId)
    {
        $this->bankActId = $bankActId;
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
     * @return MerchantAccountBindCardRequest
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantAccountBindCard';
    }


}
