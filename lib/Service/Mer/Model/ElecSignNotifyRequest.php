<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class ElecSignNotifyRequest extends BaseRequest
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
     * @return ElecSignNotifyRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'elecSignNotify';
    }


}
