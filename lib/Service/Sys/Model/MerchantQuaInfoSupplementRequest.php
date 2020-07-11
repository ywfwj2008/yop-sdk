<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantQuaInfoSupplementRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $fileInfo;
    /**
     * @var string
     */
    private $merNo;
    /**
     * @var string
     */
    private $requestNo;

    /**
     * Gets fileInfo
     *
     * @return string
     */
    public function getFileInfo()
    {
        return $this->fileInfo;
    }

    /**
     * Sets fileInfo
     *
     * @param string $fileInfo
     * @return MerchantQuaInfoSupplementRequest
     */
    public function setFileInfo($fileInfo)
    {
        $this->fileInfo = $fileInfo;
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
     * @return MerchantQuaInfoSupplementRequest
     */
    public function setMerNo($merNo)
    {
        $this->merNo = $merNo;
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
     * @return MerchantQuaInfoSupplementRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantQuaInfoSupplement';
    }


}
