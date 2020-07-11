<?php


namespace Yeepay\Yop\Sdk\Service\Router\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class OpenPayReportQueryRequest extends BaseRequest
{
    /**
     * @var array|string
     */
    private $merchantNo;
    /**
     * @var array|string
     */
    private $sceneType;
    /**
     * @var string
     */
    private $reportId;

    /**
     * Gets merchantNo
     *
     * @return array|string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param array|string $merchantNo
     * @return OpenPayReportQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets sceneType
     *
     * @return array|string
     */
    public function getSceneType()
    {
        return $this->sceneType;
    }

    /**
     * Sets sceneType
     *
     * @param array|string $sceneType
     * @return OpenPayReportQueryRequest
     */
    public function setSceneType($sceneType)
    {
        $this->sceneType = $sceneType;
        return $this;
    }
    /**
     * Gets reportId
     *
     * @return string
     */
    public function getReportId()
    {
        return $this->reportId;
    }

    /**
     * Sets reportId
     *
     * @param string $reportId
     * @return OpenPayReportQueryRequest
     */
    public function setReportId($reportId)
    {
        $this->reportId = $reportId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'openPayReportQuery';
    }


}
