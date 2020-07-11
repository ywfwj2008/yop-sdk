<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BillCashdaydownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $dayString;
    /**
     * @var string
     */
    private $dataType;

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
     * @return BillCashdaydownloadRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets dayString
     *
     * @return string
     */
    public function getDayString()
    {
        return $this->dayString;
    }

    /**
     * Sets dayString
     *
     * @param string $dayString
     * @return BillCashdaydownloadRequest
     */
    public function setDayString($dayString)
    {
        $this->dayString = $dayString;
        return $this;
    }
    /**
     * Gets dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Sets dataType
     *
     * @param string $dataType
     * @return BillCashdaydownloadRequest
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billCashdaydownload';
    }


}
