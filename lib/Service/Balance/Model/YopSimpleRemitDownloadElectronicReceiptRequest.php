<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class YopSimpleRemitDownloadElectronicReceiptRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $batchNo;
    /**
     * @var string
     */
    private $orderId;

    /**
     * Gets batchNo
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * Sets batchNo
     *
     * @param string $batchNo
     * @return YopSimpleRemitDownloadElectronicReceiptRequest
     */
    public function setBatchNo($batchNo)
    {
        $this->batchNo = $batchNo;
        return $this;
    }
    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return YopSimpleRemitDownloadElectronicReceiptRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'yopSimpleRemitDownloadElectronicReceipt';
    }


}
