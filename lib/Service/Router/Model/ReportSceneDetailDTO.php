<?php
/**
 * ReportSceneDetailDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 路由
 *
 * <p>路由分组，目前有报备服务</p>
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Router\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * ReportSceneDetailDTO Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportSceneDetailDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportSceneDetailDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantNo' => 'string',
        'reportId' => 'string',
        'reportMerchantNo' => 'string',
        'channelNo' => 'string',
        'channelName' => 'string',
        'channelCode' => 'string',
        'sceneType' => 'string',
        'appId' => 'string',
        'appSecret' => 'string',
        'status' => 'int',
        'reportMsg' => 'string',
        'reportStatusCode' => 'string',
        'bankType' => 'string',
        'lineType' => 'string',
        'reportFee' => 'string',
        'promotionType' => 'string',
        'bankCode' => 'string',
        'dealStatus' => 'string',
        'errMsg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantNo' => null,
        'reportId' => null,
        'reportMerchantNo' => null,
        'channelNo' => null,
        'channelName' => null,
        'channelCode' => null,
        'sceneType' => null,
        'appId' => null,
        'appSecret' => null,
        'status' => 'int32',
        'reportMsg' => null,
        'reportStatusCode' => null,
        'bankType' => null,
        'lineType' => null,
        'reportFee' => null,
        'promotionType' => null,
        'bankCode' => null,
        'dealStatus' => null,
        'errMsg' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantNo' => 'merchantNo',
        'reportId' => 'reportId',
        'reportMerchantNo' => 'reportMerchantNo',
        'channelNo' => 'channelNo',
        'channelName' => 'channelName',
        'channelCode' => 'channelCode',
        'sceneType' => 'sceneType',
        'appId' => 'appId',
        'appSecret' => 'appSecret',
        'status' => 'status',
        'reportMsg' => 'reportMsg',
        'reportStatusCode' => 'reportStatusCode',
        'bankType' => 'bankType',
        'lineType' => 'lineType',
        'reportFee' => 'reportFee',
        'promotionType' => 'promotionType',
        'bankCode' => 'bankCode',
        'dealStatus' => 'dealStatus',
        'errMsg' => 'errMsg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantNo' => 'setMerchantNo',
        'reportId' => 'setReportId',
        'reportMerchantNo' => 'setReportMerchantNo',
        'channelNo' => 'setChannelNo',
        'channelName' => 'setChannelName',
        'channelCode' => 'setChannelCode',
        'sceneType' => 'setSceneType',
        'appId' => 'setAppId',
        'appSecret' => 'setAppSecret',
        'status' => 'setStatus',
        'reportMsg' => 'setReportMsg',
        'reportStatusCode' => 'setReportStatusCode',
        'bankType' => 'setBankType',
        'lineType' => 'setLineType',
        'reportFee' => 'setReportFee',
        'promotionType' => 'setPromotionType',
        'bankCode' => 'setBankCode',
        'dealStatus' => 'setDealStatus',
        'errMsg' => 'setErrMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantNo' => 'getMerchantNo',
        'reportId' => 'getReportId',
        'reportMerchantNo' => 'getReportMerchantNo',
        'channelNo' => 'getChannelNo',
        'channelName' => 'getChannelName',
        'channelCode' => 'getChannelCode',
        'sceneType' => 'getSceneType',
        'appId' => 'getAppId',
        'appSecret' => 'getAppSecret',
        'status' => 'getStatus',
        'reportMsg' => 'getReportMsg',
        'reportStatusCode' => 'getReportStatusCode',
        'bankType' => 'getBankType',
        'lineType' => 'getLineType',
        'reportFee' => 'getReportFee',
        'promotionType' => 'getPromotionType',
        'bankCode' => 'getBankCode',
        'dealStatus' => 'getDealStatus',
        'errMsg' => 'getErrMsg'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['reportId'] = isset($data['reportId']) ? $data['reportId'] : null;
        $this->container['reportMerchantNo'] = isset($data['reportMerchantNo']) ? $data['reportMerchantNo'] : null;
        $this->container['channelNo'] = isset($data['channelNo']) ? $data['channelNo'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['channelCode'] = isset($data['channelCode']) ? $data['channelCode'] : null;
        $this->container['sceneType'] = isset($data['sceneType']) ? $data['sceneType'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appSecret'] = isset($data['appSecret']) ? $data['appSecret'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reportMsg'] = isset($data['reportMsg']) ? $data['reportMsg'] : null;
        $this->container['reportStatusCode'] = isset($data['reportStatusCode']) ? $data['reportStatusCode'] : null;
        $this->container['bankType'] = isset($data['bankType']) ? $data['bankType'] : null;
        $this->container['lineType'] = isset($data['lineType']) ? $data['lineType'] : null;
        $this->container['reportFee'] = isset($data['reportFee']) ? $data['reportFee'] : null;
        $this->container['promotionType'] = isset($data['promotionType']) ? $data['promotionType'] : null;
        $this->container['bankCode'] = isset($data['bankCode']) ? $data['bankCode'] : null;
        $this->container['dealStatus'] = isset($data['dealStatus']) ? $data['dealStatus'] : null;
        $this->container['errMsg'] = isset($data['errMsg']) ? $data['errMsg'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo merchantNo
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets reportId
     *
     * @return string
     */
    public function getReportId()
    {
        return $this->container['reportId'];
    }

    /**
     * Sets reportId
     *
     * @param string $reportId reportId
     *
     * @return $this
     */
    public function setReportId($reportId)
    {
        $this->container['reportId'] = $reportId;

        return $this;
    }

    /**
     * Gets reportMerchantNo
     *
     * @return string
     */
    public function getReportMerchantNo()
    {
        return $this->container['reportMerchantNo'];
    }

    /**
     * Sets reportMerchantNo
     *
     * @param string $reportMerchantNo reportMerchantNo
     *
     * @return $this
     */
    public function setReportMerchantNo($reportMerchantNo)
    {
        $this->container['reportMerchantNo'] = $reportMerchantNo;

        return $this;
    }

    /**
     * Gets channelNo
     *
     * @return string
     */
    public function getChannelNo()
    {
        return $this->container['channelNo'];
    }

    /**
     * Sets channelNo
     *
     * @param string $channelNo channelNo
     *
     * @return $this
     */
    public function setChannelNo($channelNo)
    {
        $this->container['channelNo'] = $channelNo;

        return $this;
    }

    /**
     * Gets channelName
     *
     * @return string
     */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
     * Sets channelName
     *
     * @param string $channelName channelName
     *
     * @return $this
     */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;

        return $this;
    }

    /**
     * Gets channelCode
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->container['channelCode'];
    }

    /**
     * Sets channelCode
     *
     * @param string $channelCode channelCode
     *
     * @return $this
     */
    public function setChannelCode($channelCode)
    {
        $this->container['channelCode'] = $channelCode;

        return $this;
    }

    /**
     * Gets sceneType
     *
     * @return string
     */
    public function getSceneType()
    {
        return $this->container['sceneType'];
    }

    /**
     * Sets sceneType
     *
     * @param string $sceneType sceneType
     *
     * @return $this
     */
    public function setSceneType($sceneType)
    {
        $this->container['sceneType'] = $sceneType;

        return $this;
    }

    /**
     * Gets appId
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
     * Sets appId
     *
     * @param string $appId appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;

        return $this;
    }

    /**
     * Gets appSecret
     *
     * @return string
     */
    public function getAppSecret()
    {
        return $this->container['appSecret'];
    }

    /**
     * Sets appSecret
     *
     * @param string $appSecret appSecret
     *
     * @return $this
     */
    public function setAppSecret($appSecret)
    {
        $this->container['appSecret'] = $appSecret;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reportMsg
     *
     * @return string
     */
    public function getReportMsg()
    {
        return $this->container['reportMsg'];
    }

    /**
     * Sets reportMsg
     *
     * @param string $reportMsg reportMsg
     *
     * @return $this
     */
    public function setReportMsg($reportMsg)
    {
        $this->container['reportMsg'] = $reportMsg;

        return $this;
    }

    /**
     * Gets reportStatusCode
     *
     * @return string
     */
    public function getReportStatusCode()
    {
        return $this->container['reportStatusCode'];
    }

    /**
     * Sets reportStatusCode
     *
     * @param string $reportStatusCode reportStatusCode
     *
     * @return $this
     */
    public function setReportStatusCode($reportStatusCode)
    {
        $this->container['reportStatusCode'] = $reportStatusCode;

        return $this;
    }

    /**
     * Gets bankType
     *
     * @return string
     */
    public function getBankType()
    {
        return $this->container['bankType'];
    }

    /**
     * Sets bankType
     *
     * @param string $bankType bankType
     *
     * @return $this
     */
    public function setBankType($bankType)
    {
        $this->container['bankType'] = $bankType;

        return $this;
    }

    /**
     * Gets lineType
     *
     * @return string
     */
    public function getLineType()
    {
        return $this->container['lineType'];
    }

    /**
     * Sets lineType
     *
     * @param string $lineType lineType
     *
     * @return $this
     */
    public function setLineType($lineType)
    {
        $this->container['lineType'] = $lineType;

        return $this;
    }

    /**
     * Gets reportFee
     *
     * @return string
     */
    public function getReportFee()
    {
        return $this->container['reportFee'];
    }

    /**
     * Sets reportFee
     *
     * @param string $reportFee reportFee
     *
     * @return $this
     */
    public function setReportFee($reportFee)
    {
        $this->container['reportFee'] = $reportFee;

        return $this;
    }

    /**
     * Gets promotionType
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->container['promotionType'];
    }

    /**
     * Sets promotionType
     *
     * @param string $promotionType promotionType
     *
     * @return $this
     */
    public function setPromotionType($promotionType)
    {
        $this->container['promotionType'] = $promotionType;

        return $this;
    }

    /**
     * Gets bankCode
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bankCode'];
    }

    /**
     * Sets bankCode
     *
     * @param string $bankCode bankCode
     *
     * @return $this
     */
    public function setBankCode($bankCode)
    {
        $this->container['bankCode'] = $bankCode;

        return $this;
    }

    /**
     * Gets dealStatus
     *
     * @return string
     */
    public function getDealStatus()
    {
        return $this->container['dealStatus'];
    }

    /**
     * Sets dealStatus
     *
     * @param string $dealStatus dealStatus
     *
     * @return $this
     */
    public function setDealStatus($dealStatus)
    {
        $this->container['dealStatus'] = $dealStatus;

        return $this;
    }

    /**
     * Gets errMsg
     *
     * @return string
     */
    public function getErrMsg()
    {
        return $this->container['errMsg'];
    }

    /**
     * Sets errMsg
     *
     * @param string $errMsg errMsg
     *
     * @return $this
     */
    public function setErrMsg($errMsg)
    {
        $this->container['errMsg'] = $errMsg;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


