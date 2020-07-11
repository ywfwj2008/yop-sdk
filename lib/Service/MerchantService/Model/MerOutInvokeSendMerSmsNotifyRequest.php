<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerOutInvokeSendMerSmsNotifyRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $sourceType;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets sourceType
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Sets sourceType
     *
     * @param string $sourceType
     * @return MerOutInvokeSendMerSmsNotifyRequest
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;
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
     * @return MerOutInvokeSendMerSmsNotifyRequest
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
     * @return MerOutInvokeSendMerSmsNotifyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merOutInvokeSendMerSmsNotify';
    }


}
