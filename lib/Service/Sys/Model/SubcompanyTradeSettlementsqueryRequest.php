<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class SubcompanyTradeSettlementsqueryRequest extends BaseRequest
{
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
    private $bizSystemNo;
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
    private $hmac;

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
     * @return SubcompanyTradeSettlementsqueryRequest
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
     * @return SubcompanyTradeSettlementsqueryRequest
     */
    public function setEndSettleDate($endSettleDate)
    {
        $this->endSettleDate = $endSettleDate;
        return $this;
    }
    /**
     * Gets bizSystemNo
     *
     * @return string
     */
    public function getBizSystemNo()
    {
        return $this->bizSystemNo;
    }

    /**
     * Sets bizSystemNo
     *
     * @param string $bizSystemNo
     * @return SubcompanyTradeSettlementsqueryRequest
     */
    public function setBizSystemNo($bizSystemNo)
    {
        $this->bizSystemNo = $bizSystemNo;
        return $this;
    }
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
     * @return SubcompanyTradeSettlementsqueryRequest
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
     * @return SubcompanyTradeSettlementsqueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return SubcompanyTradeSettlementsqueryRequest
     */
    public function setHmac($hmac)
    {
        $this->hmac = $hmac;
        return $this;
    }

    public static function getOperationId()
    {
        return 'subcompanyTradeSettlementsquery';
    }


}
