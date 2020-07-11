<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class OpenPayReportQueryResponse extends BaseResponse
{
    /**
     * @var PrepareQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Router\Model\PrepareQueryRespDTO';
    }

    /**
     * @param PrepareQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PrepareQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
