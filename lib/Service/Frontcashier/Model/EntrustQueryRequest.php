<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class EntrustQueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $entrustProtocolId;

    /**
     * Gets entrustProtocolId
     *
     * @return string
     */
    public function getEntrustProtocolId()
    {
        return $this->entrustProtocolId;
    }

    /**
     * Sets entrustProtocolId
     *
     * @param string $entrustProtocolId
     * @return EntrustQueryRequest
     */
    public function setEntrustProtocolId($entrustProtocolId)
    {
        $this->entrustProtocolId = $entrustProtocolId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'entrustQuery';
    }


}
