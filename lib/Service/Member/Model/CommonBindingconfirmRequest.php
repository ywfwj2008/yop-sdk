<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonBindingconfirmRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNo;
    /**
     * @var string
     */
    private $requestId;
    /**
     * @var string
     */
    private $businessNo;
    /**
     * @var string
     */
    private $validateCode;
    /**
     * @var string
     */
    private $platformUserNo;

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
     * @return CommonBindingconfirmRequest
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        return $this;
    }
    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId
     *
     * @param string $requestId
     * @return CommonBindingconfirmRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Gets businessNo
     *
     * @return string
     */
    public function getBusinessNo()
    {
        return $this->businessNo;
    }

    /**
     * Sets businessNo
     *
     * @param string $businessNo
     * @return CommonBindingconfirmRequest
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
        return $this;
    }
    /**
     * Gets validateCode
     *
     * @return string
     */
    public function getValidateCode()
    {
        return $this->validateCode;
    }

    /**
     * Sets validateCode
     *
     * @param string $validateCode
     * @return CommonBindingconfirmRequest
     */
    public function setValidateCode($validateCode)
    {
        $this->validateCode = $validateCode;
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
     * @return CommonBindingconfirmRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonBindingconfirm';
    }


}
