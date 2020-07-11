<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class OpenPayAsyncReportReportResponse extends BaseResponse
{
    /**
     * @var PrepareRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Router\Model\PrepareRespDto';
    }

    /**
     * @param PrepareRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PrepareRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
