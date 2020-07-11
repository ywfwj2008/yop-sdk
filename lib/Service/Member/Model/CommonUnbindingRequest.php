<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonUnbindingRequest extends BaseRequest
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
    private $platformUserNo;
    /**
     * @var int
     */
    private $bindId;

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
     * @return CommonUnbindingRequest
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
     * @return CommonUnbindingRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * @return CommonUnbindingRequest
     */
    public function setPlatformUserNo($platformUserNo)
    {
        $this->platformUserNo = $platformUserNo;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return int
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param int $bindId
     * @return CommonUnbindingRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonUnbinding';
    }


}
