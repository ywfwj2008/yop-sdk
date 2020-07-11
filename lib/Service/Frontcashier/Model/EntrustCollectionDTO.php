<?php
/**
 * EntrustCollectionDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 前置收银台
 *
 * <p>前置收银台</p>
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

namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * EntrustCollectionDTO Class Doc Comment
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EntrustCollectionDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EntrustCollectionDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'collectAmount' => 'float',
        'collectBeginDate' => 'string',
        'collectEndDate' => 'string',
        'cycleFrequency' => 'int',
        'cycleStep' => 'int',
        'cycleStepUnit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'collectAmount' => null,
        'collectBeginDate' => 'date',
        'collectEndDate' => 'date',
        'cycleFrequency' => 'int32',
        'cycleStep' => 'int32',
        'cycleStepUnit' => null
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
        'collectAmount' => 'collectAmount',
        'collectBeginDate' => 'collectBeginDate',
        'collectEndDate' => 'collectEndDate',
        'cycleFrequency' => 'cycleFrequency',
        'cycleStep' => 'cycleStep',
        'cycleStepUnit' => 'cycleStepUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collectAmount' => 'setCollectAmount',
        'collectBeginDate' => 'setCollectBeginDate',
        'collectEndDate' => 'setCollectEndDate',
        'cycleFrequency' => 'setCycleFrequency',
        'cycleStep' => 'setCycleStep',
        'cycleStepUnit' => 'setCycleStepUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collectAmount' => 'getCollectAmount',
        'collectBeginDate' => 'getCollectBeginDate',
        'collectEndDate' => 'getCollectEndDate',
        'cycleFrequency' => 'getCycleFrequency',
        'cycleStep' => 'getCycleStep',
        'cycleStepUnit' => 'getCycleStepUnit'
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
        $this->container['collectAmount'] = isset($data['collectAmount']) ? $data['collectAmount'] : null;
        $this->container['collectBeginDate'] = isset($data['collectBeginDate']) ? $data['collectBeginDate'] : null;
        $this->container['collectEndDate'] = isset($data['collectEndDate']) ? $data['collectEndDate'] : null;
        $this->container['cycleFrequency'] = isset($data['cycleFrequency']) ? $data['cycleFrequency'] : null;
        $this->container['cycleStep'] = isset($data['cycleStep']) ? $data['cycleStep'] : null;
        $this->container['cycleStepUnit'] = isset($data['cycleStepUnit']) ? $data['cycleStepUnit'] : null;
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
     * Gets collectAmount
     *
     * @return float
     */
    public function getCollectAmount()
    {
        return $this->container['collectAmount'];
    }

    /**
     * Sets collectAmount
     *
     * @param float $collectAmount collectAmount
     *
     * @return $this
     */
    public function setCollectAmount($collectAmount)
    {
        $this->container['collectAmount'] = $collectAmount;

        return $this;
    }

    /**
     * Gets collectBeginDate
     *
     * @return string
     */
    public function getCollectBeginDate()
    {
        return $this->container['collectBeginDate'];
    }

    /**
     * Sets collectBeginDate
     *
     * @param string $collectBeginDate collectBeginDate
     *
     * @return $this
     */
    public function setCollectBeginDate($collectBeginDate)
    {
        $this->container['collectBeginDate'] = $collectBeginDate;

        return $this;
    }

    /**
     * Gets collectEndDate
     *
     * @return string
     */
    public function getCollectEndDate()
    {
        return $this->container['collectEndDate'];
    }

    /**
     * Sets collectEndDate
     *
     * @param string $collectEndDate collectEndDate
     *
     * @return $this
     */
    public function setCollectEndDate($collectEndDate)
    {
        $this->container['collectEndDate'] = $collectEndDate;

        return $this;
    }

    /**
     * Gets cycleFrequency
     *
     * @return int
     */
    public function getCycleFrequency()
    {
        return $this->container['cycleFrequency'];
    }

    /**
     * Sets cycleFrequency
     *
     * @param int $cycleFrequency cycleFrequency
     *
     * @return $this
     */
    public function setCycleFrequency($cycleFrequency)
    {
        $this->container['cycleFrequency'] = $cycleFrequency;

        return $this;
    }

    /**
     * Gets cycleStep
     *
     * @return int
     */
    public function getCycleStep()
    {
        return $this->container['cycleStep'];
    }

    /**
     * Sets cycleStep
     *
     * @param int $cycleStep cycleStep
     *
     * @return $this
     */
    public function setCycleStep($cycleStep)
    {
        $this->container['cycleStep'] = $cycleStep;

        return $this;
    }

    /**
     * Gets cycleStepUnit
     *
     * @return string
     */
    public function getCycleStepUnit()
    {
        return $this->container['cycleStepUnit'];
    }

    /**
     * Sets cycleStepUnit
     *
     * @param string $cycleStepUnit cycleStepUnit
     *
     * @return $this
     */
    public function setCycleStepUnit($cycleStepUnit)
    {
        $this->container['cycleStepUnit'] = $cycleStepUnit;

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


