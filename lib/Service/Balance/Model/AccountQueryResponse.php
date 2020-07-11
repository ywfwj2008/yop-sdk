<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class AccountQueryResponse extends BaseResponse
{
    /**
     * @var BalanceValidAmountResDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Balance\Model\BalanceValidAmountResDto';
    }

    /**
     * @param BalanceValidAmountResDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceValidAmountResDto
     */
    function getResult()
    {
        return $this->result;
    }
}
