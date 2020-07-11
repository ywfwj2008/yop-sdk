<?php


namespace Yeepay\Yop\Sdk\Service\Cloud-account\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class AccountTransferQueryTransferRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return AccountTransferQueryTransferRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountTransferQueryTransfer';
    }


}
