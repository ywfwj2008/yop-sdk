<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class ModifyPayProductInfoRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $payProductInfo;
    /**
     * @var string
     */
    private $withdrawProductMap;
    /**
     * @var string
     */
    private $smsCode;

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
     * @return ModifyPayProductInfoRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return ModifyPayProductInfoRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return ModifyPayProductInfoRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets payProductInfo
     *
     * @return string
     */
    public function getPayProductInfo()
    {
        return $this->payProductInfo;
    }

    /**
     * Sets payProductInfo
     *
     * @param string $payProductInfo
     * @return ModifyPayProductInfoRequest
     */
    public function setPayProductInfo($payProductInfo)
    {
        $this->payProductInfo = $payProductInfo;
        return $this;
    }
    /**
     * Gets withdrawProductMap
     *
     * @return string
     */
    public function getWithdrawProductMap()
    {
        return $this->withdrawProductMap;
    }

    /**
     * Sets withdrawProductMap
     *
     * @param string $withdrawProductMap
     * @return ModifyPayProductInfoRequest
     */
    public function setWithdrawProductMap($withdrawProductMap)
    {
        $this->withdrawProductMap = $withdrawProductMap;
        return $this;
    }
    /**
     * Gets smsCode
     *
     * @return string
     */
    public function getSmsCode()
    {
        return $this->smsCode;
    }

    /**
     * Sets smsCode
     *
     * @param string $smsCode
     * @return ModifyPayProductInfoRequest
     */
    public function setSmsCode($smsCode)
    {
        $this->smsCode = $smsCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'modifyPayProductInfo';
    }


}
