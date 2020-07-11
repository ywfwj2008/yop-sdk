<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantMerchantSettleWayUpdateRequest extends BaseRequest
{
    /**
     * @var bool
     */
    private $selfService;
    /**
     * @var bool
     */
    private $autoService;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merNo;
    /**
     * @var string
     */
    private $agentNo;

    /**
     * Gets selfService
     *
     * @return bool
     */
    public function getSelfService()
    {
        return $this->selfService;
    }

    /**
     * Sets selfService
     *
     * @param bool $selfService
     * @return MerchantMerchantSettleWayUpdateRequest
     */
    public function setSelfService($selfService)
    {
        $this->selfService = $selfService;
        return $this;
    }
    /**
     * Gets autoService
     *
     * @return bool
     */
    public function getAutoService()
    {
        return $this->autoService;
    }

    /**
     * Sets autoService
     *
     * @param bool $autoService
     * @return MerchantMerchantSettleWayUpdateRequest
     */
    public function setAutoService($autoService)
    {
        $this->autoService = $autoService;
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
     * @return MerchantMerchantSettleWayUpdateRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
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
     * @return MerchantMerchantSettleWayUpdateRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
        return $this;
    }
    /**
     * Gets agentNo
     *
     * @return string
     */
    public function getAgentNo()
    {
        return $this->agentNo;
    }

    /**
     * Sets agentNo
     *
     * @param string $agentNo
     * @return MerchantMerchantSettleWayUpdateRequest
     */
    public function setAgentNo($agentNo)
    {
        $this->agentNo = $agentNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantMerchantSettleWayUpdate';
    }


}
