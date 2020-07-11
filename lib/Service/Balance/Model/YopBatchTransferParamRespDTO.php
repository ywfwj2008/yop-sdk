<?php
/**
 * YopBatchTransferParamRespDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 代付代发
 *
 * 代付代发-日结通
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

namespace Yeepay\Yop\Sdk\Service\Balance\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * YopBatchTransferParamRespDTO Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YopBatchTransferParamRespDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YopBatchTransferParamRespDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'errorCode' => 'string',
        'errorMsg' => 'string',
        'batchNo' => 'string',
        'transferStatusCode' => 'string',
        'detailErrorJson' => 'string',
        'detailJson' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'errorCode' => null,
        'errorMsg' => null,
        'batchNo' => null,
        'transferStatusCode' => null,
        'detailErrorJson' => null,
        'detailJson' => null
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
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'batchNo' => 'batchNo',
        'transferStatusCode' => 'transferStatusCode',
        'detailErrorJson' => 'detailErrorJson',
        'detailJson' => 'detailJson'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'errorCode' => 'setErrorCode',
        'errorMsg' => 'setErrorMsg',
        'batchNo' => 'setBatchNo',
        'transferStatusCode' => 'setTransferStatusCode',
        'detailErrorJson' => 'setDetailErrorJson',
        'detailJson' => 'setDetailJson'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'errorCode' => 'getErrorCode',
        'errorMsg' => 'getErrorMsg',
        'batchNo' => 'getBatchNo',
        'transferStatusCode' => 'getTransferStatusCode',
        'detailErrorJson' => 'getDetailErrorJson',
        'detailJson' => 'getDetailJson'
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
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['batchNo'] = isset($data['batchNo']) ? $data['batchNo'] : null;
        $this->container['transferStatusCode'] = isset($data['transferStatusCode']) ? $data['transferStatusCode'] : null;
        $this->container['detailErrorJson'] = isset($data['detailErrorJson']) ? $data['detailErrorJson'] : null;
        $this->container['detailJson'] = isset($data['detailJson']) ? $data['detailJson'] : null;
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
     * Gets batchNo
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->container['batchNo'];
    }

    /**
     * Sets batchNo
     *
     * @param string $batchNo batchNo
     *
     * @return $this
     */
    public function setBatchNo($batchNo)
    {
        $this->container['batchNo'] = $batchNo;

        return $this;
    }

    /**
     * Gets transferStatusCode
     *
     * @return string
     */
    public function getTransferStatusCode()
    {
        return $this->container['transferStatusCode'];
    }

    /**
     * Sets transferStatusCode
     *
     * @param string $transferStatusCode transferStatusCode
     *
     * @return $this
     */
    public function setTransferStatusCode($transferStatusCode)
    {
        $this->container['transferStatusCode'] = $transferStatusCode;

        return $this;
    }

    /**
     * Gets detailErrorJson
     *
     * @return string
     */
    public function getDetailErrorJson()
    {
        return $this->container['detailErrorJson'];
    }

    /**
     * Sets detailErrorJson
     *
     * @param string $detailErrorJson detailErrorJson
     *
     * @return $this
     */
    public function setDetailErrorJson($detailErrorJson)
    {
        $this->container['detailErrorJson'] = $detailErrorJson;

        return $this;
    }

    /**
     * Gets detailJson
     *
     * @return string
     */
    public function getDetailJson()
    {
        return $this->container['detailJson'];
    }

    /**
     * Sets detailJson
     *
     * @param string $detailJson detailJson
     *
     * @return $this
     */
    public function setDetailJson($detailJson)
    {
        $this->container['detailJson'] = $detailJson;

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


