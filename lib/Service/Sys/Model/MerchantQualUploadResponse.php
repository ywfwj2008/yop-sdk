<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantQualUploadResponse extends BaseResponse
{
    /**
     * @var MerFileUploadRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Sys\Model\MerFileUploadRespDto';
    }

    /**
     * @param MerFileUploadRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerFileUploadRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
