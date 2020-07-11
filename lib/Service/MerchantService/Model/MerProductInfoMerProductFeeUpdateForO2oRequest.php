<?php


namespace Yeepay\Yop\Sdk\Service\MerchantService\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerProductInfoMerProductFeeUpdateForO2oRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $payProductMap;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets payProductMap
     *
     * @return string
     */
    public function getPayProductMap()
    {
        return $this->payProductMap;
    }

    /**
     * Sets payProductMap
     *
     * @param string $payProductMap
     * @return MerProductInfoMerProductFeeUpdateForO2oRequest
     */
    public function setPayProductMap($payProductMap)
    {
        $this->payProductMap = $payProductMap;
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
     * @return MerProductInfoMerProductFeeUpdateForO2oRequest
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
     * @return MerProductInfoMerProductFeeUpdateForO2oRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merProductInfoMerProductFeeUpdateForO2o';
    }


}
