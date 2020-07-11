<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class ElecSignNotifyResponse extends BaseResponse
{
    /**
     * @var MerElecSignNotifyRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerElecSignNotifyRespDTO';
    }

    /**
     * @param MerElecSignNotifyRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerElecSignNotifyRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
