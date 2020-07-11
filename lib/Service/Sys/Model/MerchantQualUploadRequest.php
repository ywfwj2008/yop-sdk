<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


use Yeepay\Yop\Sdk\Model\BaseRequest;

class MerchantQualUploadRequest extends BaseRequest
{
    /**
     * @var Resource
     */
    private $merQual;
    /**
     * @var string
     */
    private $merQualOriginalFileName;
    /**
     * @var string
     */
    private $merQualFileSize;
    /**
     * @var string
     */
    private $merQualMd5;

    /**
     * Gets merQual
     *
     * @return Resource
     */
    public function getMerQual()
    {
        return $this->merQual;
    }

    /**
     * Sets merQual
     *
     * @param Resource $merQual
     * @return MerchantQualUploadRequest
     */
    public function setMerQual($merQual)
    {
        $this->merQual = $merQual;
        return $this;
    }
    /**
     * Gets merQualOriginalFileName
     *
     * @return string
     */
    public function getMerQualOriginalFileName()
    {
        return $this->merQualOriginalFileName;
    }

    /**
     * Sets merQualOriginalFileName
     *
     * @param string $merQualOriginalFileName
     * @return MerchantQualUploadRequest
     */
    public function setMerQualOriginalFileName($merQualOriginalFileName)
    {
        $this->merQualOriginalFileName = $merQualOriginalFileName;
        return $this;
    }
    /**
     * Gets merQualFileSize
     *
     * @return string
     */
    public function getMerQualFileSize()
    {
        return $this->merQualFileSize;
    }

    /**
     * Sets merQualFileSize
     *
     * @param string $merQualFileSize
     * @return MerchantQualUploadRequest
     */
    public function setMerQualFileSize($merQualFileSize)
    {
        $this->merQualFileSize = $merQualFileSize;
        return $this;
    }
    /**
     * Gets merQualMd5
     *
     * @return string
     */
    public function getMerQualMd5()
    {
        return $this->merQualMd5;
    }

    /**
     * Sets merQualMd5
     *
     * @param string $merQualMd5
     * @return MerchantQualUploadRequest
     */
    public function setMerQualMd5($merQualMd5)
    {
        $this->merQualMd5 = $merQualMd5;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantQualUpload';
    }


}
