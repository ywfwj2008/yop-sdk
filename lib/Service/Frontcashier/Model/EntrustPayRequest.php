<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class EntrustPayRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $bindId;
    /**
     * @var string
     */
    private $cardNo;
    /**
     * @var string
     */
    private $userIp;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $entrustProtocolId;
    /**
     * @var string
     */
    private $token;
    /**
     * @var string
     */
    private $version;
    /**
     * @var string
     */
    private $marketActivityNo;
    /**
     * @var bool
     */
    private $attendActivity;

    /**
     * Gets bindId
     *
     * @return string
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param string $bindId
     * @return EntrustPayRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets cardNo
     *
     * @return string
     */
    public function getCardNo()
    {
        return $this->cardNo;
    }

    /**
     * Sets cardNo
     *
     * @param string $cardNo
     * @return EntrustPayRequest
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
        return $this;
    }
    /**
     * Gets userIp
     *
     * @return string
     */
    public function getUserIp()
    {
        return $this->userIp;
    }

    /**
     * Sets userIp
     *
     * @param string $userIp
     * @return EntrustPayRequest
     */
    public function setUserIp($userIp)
    {
        $this->userIp = $userIp;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return EntrustPayRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return EntrustPayRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets entrustProtocolId
     *
     * @return string
     */
    public function getEntrustProtocolId()
    {
        return $this->entrustProtocolId;
    }

    /**
     * Sets entrustProtocolId
     *
     * @param string $entrustProtocolId
     * @return EntrustPayRequest
     */
    public function setEntrustProtocolId($entrustProtocolId)
    {
        $this->entrustProtocolId = $entrustProtocolId;
        return $this;
    }
    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets token
     *
     * @param string $token
     * @return EntrustPayRequest
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets version
     *
     * @param string $version
     * @return EntrustPayRequest
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * Gets marketActivityNo
     *
     * @return string
     */
    public function getMarketActivityNo()
    {
        return $this->marketActivityNo;
    }

    /**
     * Sets marketActivityNo
     *
     * @param string $marketActivityNo
     * @return EntrustPayRequest
     */
    public function setMarketActivityNo($marketActivityNo)
    {
        $this->marketActivityNo = $marketActivityNo;
        return $this;
    }
    /**
     * Gets attendActivity
     *
     * @return bool
     */
    public function getAttendActivity()
    {
        return $this->attendActivity;
    }

    /**
     * Sets attendActivity
     *
     * @param bool $attendActivity
     * @return EntrustPayRequest
     */
    public function setAttendActivity($attendActivity)
    {
        $this->attendActivity = $attendActivity;
        return $this;
    }

    public static function getOperationId()
    {
        return 'entrustPay';
    }


}
