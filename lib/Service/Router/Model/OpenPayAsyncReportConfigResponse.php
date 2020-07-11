<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class OpenPayAsyncReportConfigResponse extends BaseResponse
{
    /**
     * @var ReportConfigRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Router\Model\ReportConfigRespDTO';
    }

    /**
     * @param ReportConfigRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReportConfigRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
