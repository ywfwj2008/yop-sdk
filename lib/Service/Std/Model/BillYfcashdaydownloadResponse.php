<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;
class BillYfcashdaydownloadResponse extends BaseResponse
{
    /**
     * @var InputStream
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\InputStream';
    }

    /**
     * @param InputStream $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InputStream
     */
    function getResult()
    {
        return $this->result;
    }
}
