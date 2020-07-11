<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class AccountQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $customerNumber;

    /**
     * Gets customerNumber
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * Sets customerNumber
     *
     * @param string $customerNumber
     * @return AccountQueryRequest
     */
    public function setCustomerNumber($customerNumber)
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountQuery';
    }


}
