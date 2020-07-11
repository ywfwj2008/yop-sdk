<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class CommonSendsmsRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $businessNo;

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
     * @return CommonSendsmsRequest
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'commonSendsms';
    }


}
