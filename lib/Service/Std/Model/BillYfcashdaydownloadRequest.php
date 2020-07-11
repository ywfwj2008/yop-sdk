<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class BillYfcashdaydownloadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $dayString;

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
     * @return BillYfcashdaydownloadRequest
     */
    public function setDayString($dayString)
    {
        $this->dayString = $dayString;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billYfcashdaydownload';
    }


}
