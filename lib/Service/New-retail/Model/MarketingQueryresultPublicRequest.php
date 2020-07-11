<?php


namespace Yeepay\Yop\Sdk\Service\New-retail\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MarketingQueryresultPublicRequest extends BaseRequest
{
    /**
     * @var array|string
     */
    private $merchantNos;
    /**
     * @var array|string
     */
    private $sceneTypes;
    /**
     * @var array|string
     */
    private $promotionTypes;
    /**
     * @var array|string
     */
    private $bankCodes;
    /**
     * @var array|string
     */
    private $reportFees;
    /**
     * @var string
     */
    private $appKey;

    /**
     * Gets merchantNos
     *
     * @return array|string
     */
    public function getMerchantNos()
    {
        return $this->merchantNos;
    }

    /**
     * Sets merchantNos
     *
     * @param array|string $merchantNos
     * @return MarketingQueryresultPublicRequest
     */
    public function setMerchantNos($merchantNos)
    {
        $this->merchantNos = $merchantNos;
        return $this;
    }
    /**
     * Gets sceneTypes
     *
     * @return array|string
     */
    public function getSceneTypes()
    {
        return $this->sceneTypes;
    }

    /**
     * Sets sceneTypes
     *
     * @param array|string $sceneTypes
     * @return MarketingQueryresultPublicRequest
     */
    public function setSceneTypes($sceneTypes)
    {
        $this->sceneTypes = $sceneTypes;
        return $this;
    }
    /**
     * Gets promotionTypes
     *
     * @return array|string
     */
    public function getPromotionTypes()
    {
        return $this->promotionTypes;
    }

    /**
     * Sets promotionTypes
     *
     * @param array|string $promotionTypes
     * @return MarketingQueryresultPublicRequest
     */
    public function setPromotionTypes($promotionTypes)
    {
        $this->promotionTypes = $promotionTypes;
        return $this;
    }
    /**
     * Gets bankCodes
     *
     * @return array|string
     */
    public function getBankCodes()
    {
        return $this->bankCodes;
    }

    /**
     * Sets bankCodes
     *
     * @param array|string $bankCodes
     * @return MarketingQueryresultPublicRequest
     */
    public function setBankCodes($bankCodes)
    {
        $this->bankCodes = $bankCodes;
        return $this;
    }
    /**
     * Gets reportFees
     *
     * @return array|string
     */
    public function getReportFees()
    {
        return $this->reportFees;
    }

    /**
     * Sets reportFees
     *
     * @param array|string $reportFees
     * @return MarketingQueryresultPublicRequest
     */
    public function setReportFees($reportFees)
    {
        $this->reportFees = $reportFees;
        return $this;
    }
    /**
     * Gets appKey
     *
     * @return string
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * Sets appKey
     *
     * @param string $appKey
     * @return MarketingQueryresultPublicRequest
     */
    public function setAppKey($appKey)
    {
        $this->appKey = $appKey;
        return $this;
    }

    public static function getOperationId()
    {
        return 'marketingQueryresultPublic';
    }


}
