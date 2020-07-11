<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class OpenPayAsyncReportConfigRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $tradeAuthorizationDirectories;
    /**
     * @var string
     */
    private $wxpMerAppId;
    /**
     * @var string
     */
    private $senceType;
    /**
     * @var string
     */
    private $callBackUrl;
    /**
     * @var string
     */
    private $channelNo;
    /**
     * @var string
     */
    private $promotionTypeEnum;
    /**
     * @var array|string
     */
    private $channelIds;

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
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * Sets appId
     *
     * @param string $appId
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * Gets tradeAuthorizationDirectories
     *
     * @return string
     */
    public function getTradeAuthorizationDirectories()
    {
        return $this->tradeAuthorizationDirectories;
    }

    /**
     * Sets tradeAuthorizationDirectories
     *
     * @param string $tradeAuthorizationDirectories
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setTradeAuthorizationDirectories($tradeAuthorizationDirectories)
    {
        $this->tradeAuthorizationDirectories = $tradeAuthorizationDirectories;
        return $this;
    }
    /**
     * Gets wxpMerAppId
     *
     * @return string
     */
    public function getWxpMerAppId()
    {
        return $this->wxpMerAppId;
    }

    /**
     * Sets wxpMerAppId
     *
     * @param string $wxpMerAppId
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setWxpMerAppId($wxpMerAppId)
    {
        $this->wxpMerAppId = $wxpMerAppId;
        return $this;
    }
    /**
     * Gets senceType
     *
     * @return string
     */
    public function getSenceType()
    {
        return $this->senceType;
    }

    /**
     * Sets senceType
     *
     * @param string $senceType
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setSenceType($senceType)
    {
        $this->senceType = $senceType;
        return $this;
    }
    /**
     * Gets callBackUrl
     *
     * @return string
     */
    public function getCallBackUrl()
    {
        return $this->callBackUrl;
    }

    /**
     * Sets callBackUrl
     *
     * @param string $callBackUrl
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setCallBackUrl($callBackUrl)
    {
        $this->callBackUrl = $callBackUrl;
        return $this;
    }
    /**
     * Gets channelNo
     *
     * @return string
     */
    public function getChannelNo()
    {
        return $this->channelNo;
    }

    /**
     * Sets channelNo
     *
     * @param string $channelNo
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setChannelNo($channelNo)
    {
        $this->channelNo = $channelNo;
        return $this;
    }
    /**
     * Gets promotionTypeEnum
     *
     * @return string
     */
    public function getPromotionTypeEnum()
    {
        return $this->promotionTypeEnum;
    }

    /**
     * Sets promotionTypeEnum
     *
     * @param string $promotionTypeEnum
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setPromotionTypeEnum($promotionTypeEnum)
    {
        $this->promotionTypeEnum = $promotionTypeEnum;
        return $this;
    }
    /**
     * Gets channelIds
     *
     * @return array|string
     */
    public function getChannelIds()
    {
        return $this->channelIds;
    }

    /**
     * Sets channelIds
     *
     * @param array|string $channelIds
     * @return OpenPayAsyncReportConfigRequest
     */
    public function setChannelIds($channelIds)
    {
        $this->channelIds = $channelIds;
        return $this;
    }

    public static function getOperationId()
    {
        return 'openPayAsyncReportConfig';
    }


}
