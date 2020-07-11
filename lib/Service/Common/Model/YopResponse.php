<?php


namespace Yeepay\Yop\Sdk\Service\Common\Model;


use Yeepay\Yop\Sdk\Model\BaseResponse;

class YopResponse extends BaseResponse
{
    /**
     * @var array
     */
    private $data;

    function getResultClass()
    {
        return "object";
    }

    /**
     * @param array $result
     */
    function setResult($result)
    {
        $this->data = $result;
    }

    /**
     * @return array
     */
    public function getResult()
    {
        return $this->data;
    }

}