<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantQueryBankCardBinInfoRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bankCardNo;

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
     * @return MerchantQueryBankCardBinInfoRequest
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantQueryBankCardBinInfo';
    }


}
