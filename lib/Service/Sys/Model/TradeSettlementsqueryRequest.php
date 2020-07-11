<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class TradeSettlementsqueryRequest extends BaseRequest
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
    private $startSettleDate;
    /**
     * @var string
     */
    private $endSettleDate;
    /**
     * @var string
     */
    private $hmac;
    /**
     * @var string
     */
    private $settleMerchantNo;

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
     * @return TradeSettlementsqueryRequest
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
     * @return TradeSettlementsqueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets startSettleDate
     *
     * @return string
     */
    public function getStartSettleDate()
    {
        return $this->startSettleDate;
    }

    /**
     * Sets startSettleDate
     *
     * @param string $startSettleDate
     * @return TradeSettlementsqueryRequest
     */
    public function setStartSettleDate($startSettleDate)
    {
        $this->startSettleDate = $startSettleDate;
        return $this;
    }
    /**
     * Gets endSettleDate
     *
     * @return string
     */
    public function getEndSettleDate()
    {
        return $this->endSettleDate;
    }

    /**
     * Sets endSettleDate
     *
     * @param string $endSettleDate
     * @return TradeSettlementsqueryRequest
     */
    public function setEndSettleDate($endSettleDate)
    {
        $this->endSettleDate = $endSettleDate;
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
     * @return TradeSettlementsqueryRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }
    /**
     * Gets settleMerchantNo
     *
     * @return string
     */
    public function getSettleMerchantNo()
    {
        return $this->settleMerchantNo;
    }

    /**
     * Sets settleMerchantNo
     *
     * @param string $settleMerchantNo
     * @return TradeSettlementsqueryRequest
     */
    public function setSettleMerchantNo($settleMerchantNo)
    {
        $this->settleMerchantNo = $settleMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeSettlementsquery';
    }


}
