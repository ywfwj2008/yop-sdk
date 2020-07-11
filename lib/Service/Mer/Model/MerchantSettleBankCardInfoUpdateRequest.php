<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantSettleBankCardInfoUpdateRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bankcardNo;
    /**
     * @var string
     */
    private $headBankName;
    /**
     * @var string
     */
    private $bankName;
    /**
     * @var string
     */
    private $bankProvince;
    /**
     * @var string
     */
    private $bankCity;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merNo;
    /**
     * @var string
     */
    private $agentNo;

    /**
     * Gets bankcardNo
     *
     * @return string
     */
    public function getBankcardNo()
    {
        return $this->bankcardNo;
    }

    /**
     * Sets bankcardNo
     *
     * @param string $bankcardNo
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setBankcardNo($bankcardNo)
    {
        $this->bankcardNo = $bankcardNo;
        return $this;
    }
    /**
     * Gets headBankName
     *
     * @return string
     */
    public function getHeadBankName()
    {
        return $this->headBankName;
    }

    /**
     * Sets headBankName
     *
     * @param string $headBankName
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setHeadBankName($headBankName)
    {
        $this->headBankName = $headBankName;
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
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }
    /**
     * Gets bankProvince
     *
     * @return string
     */
    public function getBankProvince()
    {
        return $this->bankProvince;
    }

    /**
     * Sets bankProvince
     *
     * @param string $bankProvince
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setBankProvince($bankProvince)
    {
        $this->bankProvince = $bankProvince;
        return $this;
    }
    /**
     * Gets bankCity
     *
     * @return string
     */
    public function getBankCity()
    {
        return $this->bankCity;
    }

    /**
     * Sets bankCity
     *
     * @param string $bankCity
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setBankCity($bankCity)
    {
        $this->bankCity = $bankCity;
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
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets merNo
     *
     * @return string
     */
    public function getMerNo()
    {
        return $this->merNo;
    }

    /**
     * Sets merNo
     *
     * @param string $merNo
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
        return $this;
    }
    /**
     * Gets agentNo
     *
     * @return string
     */
    public function getAgentNo()
    {
        return $this->agentNo;
    }

    /**
     * Sets agentNo
     *
     * @param string $agentNo
     * @return MerchantSettleBankCardInfoUpdateRequest
     */
    public function setAgentNo($agentNo)
    {
        $this->agentNo = $agentNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantSettleBankCardInfoUpdate';
    }


}
