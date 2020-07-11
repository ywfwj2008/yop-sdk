<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class MerchantWechatauthQueryResponse extends BaseResponse
{
    /**
     * @var QueryCertificateResultRespDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\QueryCertificateResultRespDto';
    }

    /**
     * @param QueryCertificateResultRespDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryCertificateResultRespDto
     */
    function getResult()
    {
        return $this->result;
    }
}
