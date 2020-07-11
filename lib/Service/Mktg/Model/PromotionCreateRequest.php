<?php


namespace Yeepay\Yop\Sdk\Service\Mktg\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class PromotionCreateRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $promotionType;
    /**
     * @var string
     */
    private $activityId;
    /**
     * @var string
     */
    private $subsidySource;
    /**
     * @var string
     */
    private $subsidyType;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $discountAmount;

    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->promotionType;
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType
     * @return PromotionCreateRequest
     */
    public function setPromotionType($promotionType)
    {
        $this->promotionType = $promotionType;
        return $this;
    }
    /**
     * Gets activityId
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * Sets activityId
     *
     * @param string $activityId
     * @return PromotionCreateRequest
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
        return $this;
    }
    /**
     * Gets subsidySource
     *
     * @return string
     */
    public function getSubsidySource()
    {
        return $this->subsidySource;
    }

    /**
     * Sets subsidySource
     *
     * @param string $subsidySource
     * @return PromotionCreateRequest
     */
    public function setSubsidySource($subsidySource)
    {
        $this->subsidySource = $subsidySource;
        return $this;
    }
    /**
     * Gets subsidyType
     *
     * @return string
     */
    public function getSubsidyType()
    {
        return $this->subsidyType;
    }

    /**
     * Sets subsidyType
     *
     * @param string $subsidyType
     * @return PromotionCreateRequest
     */
    public function setSubsidyType($subsidyType)
    {
        $this->subsidyType = $subsidyType;
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
     * @return PromotionCreateRequest
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Gets discountAmount
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Sets discountAmount
     *
     * @param string $discountAmount
     * @return PromotionCreateRequest
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;
        return $this;
    }

    public static function getOperationId()
    {
        return 'promotionCreate';
    }


}
