<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantQueryMerPayProductFeeRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merNo;

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
     * @return MerchantQueryMerPayProductFeeRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantQueryMerPayProductFee';
    }


}
