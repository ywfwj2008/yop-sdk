<?php
/**
 * ReportConfigRespDTO
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
 * ReportConfigRespDTO Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportConfigRespDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportConfigRespDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'traceId' => 'string',
        'dealStatus' => 'int',
        'bizCode' => 'string',
        'bizMsg' => 'string',
        'configDetail' => '\Yeepay\Yop\Sdk\Service\Router\Model\ConfigDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'traceId' => null,
        'dealStatus' => 'int32',
        'bizCode' => null,
        'bizMsg' => null,
        'configDetail' => null
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
        'traceId' => 'traceId',
        'dealStatus' => 'dealStatus',
        'bizCode' => 'bizCode',
        'bizMsg' => 'bizMsg',
        'configDetail' => 'configDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'traceId' => 'setTraceId',
        'dealStatus' => 'setDealStatus',
        'bizCode' => 'setBizCode',
        'bizMsg' => 'setBizMsg',
        'configDetail' => 'setConfigDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'traceId' => 'getTraceId',
        'dealStatus' => 'getDealStatus',
        'bizCode' => 'getBizCode',
        'bizMsg' => 'getBizMsg',
        'configDetail' => 'getConfigDetail'
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
        $this->container['traceId'] = isset($data['traceId']) ? $data['traceId'] : null;
        $this->container['dealStatus'] = isset($data['dealStatus']) ? $data['dealStatus'] : null;
        $this->container['bizCode'] = isset($data['bizCode']) ? $data['bizCode'] : null;
        $this->container['bizMsg'] = isset($data['bizMsg']) ? $data['bizMsg'] : null;
        $this->container['configDetail'] = isset($data['configDetail']) ? $data['configDetail'] : null;
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
     * Gets traceId
     *
     * @return string
     */
    public function getTraceId()
    {
        return $this->container['traceId'];
    }

    /**
     * Sets traceId
     *
     * @param string $traceId traceId
     *
     * @return $this
     */
    public function setTraceId($traceId)
    {
        $this->container['traceId'] = $traceId;

        return $this;
    }

    /**
     * Gets dealStatus
     *
     * @return int
     */
    public function getDealStatus()
    {
        return $this->container['dealStatus'];
    }

    /**
     * Sets dealStatus
     *
     * @param int $dealStatus dealStatus
     *
     * @return $this
     */
    public function setDealStatus($dealStatus)
    {
        $this->container['dealStatus'] = $dealStatus;

        return $this;
    }

    /**
     * Gets bizCode
     *
     * @return string
     */
    public function getBizCode()
    {
        return $this->container['bizCode'];
    }

    /**
     * Sets bizCode
     *
     * @param string $bizCode bizCode
     *
     * @return $this
     */
    public function setBizCode($bizCode)
    {
        $this->container['bizCode'] = $bizCode;

        return $this;
    }

    /**
     * Gets bizMsg
     *
     * @return string
     */
    public function getBizMsg()
    {
        return $this->container['bizMsg'];
    }

    /**
     * Sets bizMsg
     *
     * @param string $bizMsg bizMsg
     *
     * @return $this
     */
    public function setBizMsg($bizMsg)
    {
        $this->container['bizMsg'] = $bizMsg;

        return $this;
    }

    /**
     * Gets configDetail
     *
     * @return \Yeepay\Yop\Sdk\Service\Router\Model\ConfigDTO[]
     */
    public function getConfigDetail()
    {
        return $this->container['configDetail'];
    }

    /**
     * Sets configDetail
     *
     * @param \Yeepay\Yop\Sdk\Service\Router\Model\ConfigDTO[] $configDetail configDetail
     *
     * @return $this
     */
    public function setConfigDetail($configDetail)
    {
        $this->container['configDetail'] = $configDetail;

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


