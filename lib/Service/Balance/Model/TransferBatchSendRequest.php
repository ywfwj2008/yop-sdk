<?php


namespace Yeepay\Yop\Sdk\Service\Balance\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TransferBatchSendRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $product;
    /**
     * @var float
     */
    private $totalAmount;
    /**
     * @var int
     */
    private $totalCount;
    /**
     * @var string
     */
    private $detailJson;

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets product
     *
     * @param string $product
     * @return TransferBatchSendRequest
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }
    /**
     * Gets totalAmount
     *
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets totalAmount
     *
     * @param float $totalAmount
     * @return TransferBatchSendRequest
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }
    /**
     * Gets totalCount
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * Sets totalCount
     *
     * @param int $totalCount
     * @return TransferBatchSendRequest
     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * Gets detailJson
     *
     * @return string
     */
    public function getDetailJson()
    {
        return $this->detailJson;
    }

    /**
     * Sets detailJson
     *
     * @param string $detailJson
     * @return TransferBatchSendRequest
     */
    public function setDetailJson($detailJson)
    {
        $this->detailJson = $detailJson;
        return $this;
    }

    public static function getOperationId()
    {
        return 'transferBatchSend';
    }


}
