<?php
/**
 * ConfigDTO
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
 * ConfigDTO Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConfigDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantNo' => 'string',
        'appId' => 'string',
        'channelCode' => 'string',
        'configType' => 'string',
        'configValue' => 'string',
        'status' => 'string',
        'errorCode' => 'string',
        'errorMsg' => 'string',
        'senceType' => 'string',
        'promotionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantNo' => null,
        'appId' => null,
        'channelCode' => null,
        'configType' => null,
        'configValue' => null,
        'status' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'senceType' => null,
        'promotionType' => null
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
        'appId' => 'appId',
        'channelCode' => 'channelCode',
        'configType' => 'configType',
        'configValue' => 'configValue',
        'status' => 'status',
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'senceType' => 'senceType',
        'promotionType' => 'promotionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantNo' => 'setMerchantNo',
        'appId' => 'setAppId',
        'channelCode' => 'setChannelCode',
        'configType' => 'setConfigType',
        'configValue' => 'setConfigValue',
        'status' => 'setStatus',
        'errorCode' => 'setErrorCode',
        'errorMsg' => 'setErrorMsg',
        'senceType' => 'setSenceType',
        'promotionType' => 'setPromotionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantNo' => 'getMerchantNo',
        'appId' => 'getAppId',
        'channelCode' => 'getChannelCode',
        'configType' => 'getConfigType',
        'configValue' => 'getConfigValue',
        'status' => 'getStatus',
        'errorCode' => 'getErrorCode',
        'errorMsg' => 'getErrorMsg',
        'senceType' => 'getSenceType',
        'promotionType' => 'getPromotionType'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['channelCode'] = isset($data['channelCode']) ? $data['channelCode'] : null;
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['senceType'] = isset($data['senceType']) ? $data['senceType'] : null;
        $this->container['promotionType'] = isset($data['promotionType']) ? $data['promotionType'] : null;
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
     * Gets configType
     *
     * @return string
     */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
     * Sets configType
     *
     * @param string $configType configType
     *
     * @return $this
     */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;

        return $this;
    }

    /**
     * Gets configValue
     *
     * @return string
     */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
     * Sets configValue
     *
     * @param string $configValue configValue
     *
     * @return $this
     */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string $errorCode errorCode
     *
     * @return $this
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets errorMsg
     *
     * @return string
     */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
     * Sets errorMsg
     *
     * @param string $errorMsg errorMsg
     *
     * @return $this
     */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;

        return $this;
    }

    /**
     * Gets senceType
     *
     * @return string
     */
    public function getSenceType()
    {
        return $this->container['senceType'];
    }

    /**
     * Sets senceType
     *
     * @param string $senceType senceType
     *
     * @return $this
     */
    public function setSenceType($senceType)
    {
        $this->container['senceType'] = $senceType;

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

