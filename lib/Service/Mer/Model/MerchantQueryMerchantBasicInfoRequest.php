<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantQueryMerchantBasicInfoRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $agentNo;

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
     * @return MerchantQueryMerchantBasicInfoRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return MerchantQueryMerchantBasicInfoRequest
     */
    public function setAgentNo($agentNo)
    {
        $this->agentNo = $agentNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantQueryMerchantBasicInfo';
    }


}
