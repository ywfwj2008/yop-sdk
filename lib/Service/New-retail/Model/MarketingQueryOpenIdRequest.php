<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MarketingQueryOpenIdRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merNo;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $authCode;
    /**
     * @var string
     */
    private $requestNo;

    /**
     * Gets merNo
     *
     * @return string
     */
    public function getMerNo()
    {
        return $this->merNo;
    }

    /**
     * Sets merNo
     *
     * @param string $merNo
     * @return MarketingQueryOpenIdRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
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
     * @return MarketingQueryOpenIdRequest
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }
    /**
     * Gets authCode
     *
     * @return string
     */
    public function getAuthCode()
    {
        return $this->authCode;
    }

    /**
     * Sets authCode
     *
     * @param string $authCode
     * @return MarketingQueryOpenIdRequest
     */
    public function setAuthCode($authCode)
    {
        $this->authCode = $authCode;
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
     * @return MarketingQueryOpenIdRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'marketingQueryOpenId';
    }


}
