<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeMultiorderqueryRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $requestDateBegin;
    /**
     * @var string
     */
    private $requestDateEnd;
    /**
     * @var string
     */
    private $pageNo;
    /**
     * @var string
     */
    private $pageSize;
    /**
     * @var string
     */
    private $hmac;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return TradeMultiorderqueryRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return TradeMultiorderqueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status
     *
     * @param string $status
     * @return TradeMultiorderqueryRequest
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets requestDateBegin
     *
     * @return string
     */
    public function getRequestDateBegin()
    {
        return $this->requestDateBegin;
    }

    /**
     * Sets requestDateBegin
     *
     * @param string $requestDateBegin
     * @return TradeMultiorderqueryRequest
     */
    public function setRequestDateBegin($requestDateBegin)
    {
        $this->requestDateBegin = $requestDateBegin;
        return $this;
    }
    /**
     * Gets requestDateEnd
     *
     * @return string
     */
    public function getRequestDateEnd()
    {
        return $this->requestDateEnd;
    }

    /**
     * Sets requestDateEnd
     *
     * @param string $requestDateEnd
     * @return TradeMultiorderqueryRequest
     */
    public function setRequestDateEnd($requestDateEnd)
    {
        $this->requestDateEnd = $requestDateEnd;
        return $this;
    }
    /**
     * Gets pageNo
     *
     * @return string
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * Sets pageNo
     *
     * @param string $pageNo
     * @return TradeMultiorderqueryRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }
    /**
     * Gets pageSize
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets pageSize
     *
     * @param string $pageSize
     * @return TradeMultiorderqueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Gets hmac
     *
     * @return string
     */
    public function getHmac()
    {
        return $this->hmac;
    }

    /**
     * Sets hmac
     *
     * @param string $hmac
     * @return TradeMultiorderqueryRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeMultiorderquery';
    }


}
