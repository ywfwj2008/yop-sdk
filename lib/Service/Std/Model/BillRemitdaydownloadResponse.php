<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillRemitdaydownloadResponse extends BaseResponse
{
    /**
     * @var intint
     */
    private $result;

    function getResultClass()
    {
        return 'int';
    }

    /**
     * @param intint $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return intint
     */
    function getResult()
    {
        return $this->result;
    }
}
