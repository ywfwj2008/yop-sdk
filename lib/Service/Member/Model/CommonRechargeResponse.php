<?php


namespace Yeepay\Yop\Sdk\Service\Member\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class CommonRechargeResponse extends BaseResponse
{
    /**
     * @var MemberBaseResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Member\Model\MemberBaseResponse';
    }

    /**
     * @param MemberBaseResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MemberBaseResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
