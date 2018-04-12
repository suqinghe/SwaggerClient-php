<?php
/**
 * ServiceInfoResponses
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eBay国际物流平台商户接口
 *
 * eBay国际物流平台商户接口
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ServiceInfoResponses Class Doc Comment
 *
 * @category Class
 * @description 物流服务
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceInfoResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceInfoResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description_en' => 'string',
        'description_zh' => 'string',
        'directions' => '\Swagger\Client\Model\DirectionsResponses[]',
        'incoterm' => 'int',
        'max_length' => 'float',
        'max_weight' => 'float',
        'name_en' => 'string',
        'name_zh' => 'string',
        'service_id' => 'string',
        'sum_length' => 'float',
        'support_battery_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description_en' => null,
        'description_zh' => null,
        'directions' => null,
        'incoterm' => 'int32',
        'max_length' => null,
        'max_weight' => null,
        'name_en' => null,
        'name_zh' => null,
        'service_id' => null,
        'sum_length' => null,
        'support_battery_type' => null
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
        'description_en' => 'descriptionEn',
        'description_zh' => 'descriptionZh',
        'directions' => 'directions',
        'incoterm' => 'incoterm',
        'max_length' => 'maxLength',
        'max_weight' => 'maxWeight',
        'name_en' => 'nameEn',
        'name_zh' => 'nameZh',
        'service_id' => 'serviceId',
        'sum_length' => 'sumLength',
        'support_battery_type' => 'supportBatteryType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description_en' => 'setDescriptionEn',
        'description_zh' => 'setDescriptionZh',
        'directions' => 'setDirections',
        'incoterm' => 'setIncoterm',
        'max_length' => 'setMaxLength',
        'max_weight' => 'setMaxWeight',
        'name_en' => 'setNameEn',
        'name_zh' => 'setNameZh',
        'service_id' => 'setServiceId',
        'sum_length' => 'setSumLength',
        'support_battery_type' => 'setSupportBatteryType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description_en' => 'getDescriptionEn',
        'description_zh' => 'getDescriptionZh',
        'directions' => 'getDirections',
        'incoterm' => 'getIncoterm',
        'max_length' => 'getMaxLength',
        'max_weight' => 'getMaxWeight',
        'name_en' => 'getNameEn',
        'name_zh' => 'getNameZh',
        'service_id' => 'getServiceId',
        'sum_length' => 'getSumLength',
        'support_battery_type' => 'getSupportBatteryType'
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
        $this->container['description_en'] = isset($data['description_en']) ? $data['description_en'] : null;
        $this->container['description_zh'] = isset($data['description_zh']) ? $data['description_zh'] : null;
        $this->container['directions'] = isset($data['directions']) ? $data['directions'] : null;
        $this->container['incoterm'] = isset($data['incoterm']) ? $data['incoterm'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['max_weight'] = isset($data['max_weight']) ? $data['max_weight'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['name_zh'] = isset($data['name_zh']) ? $data['name_zh'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
        $this->container['sum_length'] = isset($data['sum_length']) ? $data['sum_length'] : null;
        $this->container['support_battery_type'] = isset($data['support_battery_type']) ? $data['support_battery_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['description_en'] === null) {
            $invalidProperties[] = "'description_en' can't be null";
        }
        if ($this->container['description_zh'] === null) {
            $invalidProperties[] = "'description_zh' can't be null";
        }
        if ($this->container['directions'] === null) {
            $invalidProperties[] = "'directions' can't be null";
        }
        if ($this->container['max_length'] === null) {
            $invalidProperties[] = "'max_length' can't be null";
        }
        if ($this->container['max_weight'] === null) {
            $invalidProperties[] = "'max_weight' can't be null";
        }
        if ($this->container['name_en'] === null) {
            $invalidProperties[] = "'name_en' can't be null";
        }
        if ($this->container['name_zh'] === null) {
            $invalidProperties[] = "'name_zh' can't be null";
        }
        if ($this->container['service_id'] === null) {
            $invalidProperties[] = "'service_id' can't be null";
        }
        if ($this->container['sum_length'] === null) {
            $invalidProperties[] = "'sum_length' can't be null";
        }
        if ($this->container['support_battery_type'] === null) {
            $invalidProperties[] = "'support_battery_type' can't be null";
        }
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

        if ($this->container['description_en'] === null) {
            return false;
        }
        if ($this->container['description_zh'] === null) {
            return false;
        }
        if ($this->container['directions'] === null) {
            return false;
        }
        if ($this->container['max_length'] === null) {
            return false;
        }
        if ($this->container['max_weight'] === null) {
            return false;
        }
        if ($this->container['name_en'] === null) {
            return false;
        }
        if ($this->container['name_zh'] === null) {
            return false;
        }
        if ($this->container['service_id'] === null) {
            return false;
        }
        if ($this->container['sum_length'] === null) {
            return false;
        }
        if ($this->container['support_battery_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets description_en
     *
     * @return string
     */
    public function getDescriptionEn()
    {
        return $this->container['description_en'];
    }

    /**
     * Sets description_en
     *
     * @param string $description_en 物流服务描述（英文）
     *
     * @return $this
     */
    public function setDescriptionEn($description_en)
    {
        $this->container['description_en'] = $description_en;

        return $this;
    }

    /**
     * Gets description_zh
     *
     * @return string
     */
    public function getDescriptionZh()
    {
        return $this->container['description_zh'];
    }

    /**
     * Sets description_zh
     *
     * @param string $description_zh 物流服务描述（中文）
     *
     * @return $this
     */
    public function setDescriptionZh($description_zh)
    {
        $this->container['description_zh'] = $description_zh;

        return $this;
    }

    /**
     * Gets directions
     *
     * @return \Swagger\Client\Model\DirectionsResponses[]
     */
    public function getDirections()
    {
        return $this->container['directions'];
    }

    /**
     * Sets directions
     *
     * @param \Swagger\Client\Model\DirectionsResponses[] $directions directions
     *
     * @return $this
     */
    public function setDirections($directions)
    {
        $this->container['directions'] = $directions;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return int
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param int $incoterm DDP/DDU方式:0 - DDP and DDU;1 -DDP;2 - DDU
     *
     * @return $this
     */
    public function setIncoterm($incoterm)
    {
        $this->container['incoterm'] = $incoterm;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return float
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param float $max_length 最大单边长（cm）
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_weight
     *
     * @return float
     */
    public function getMaxWeight()
    {
        return $this->container['max_weight'];
    }

    /**
     * Sets max_weight
     *
     * @param float $max_weight 最大承载重量（kg）
     *
     * @return $this
     */
    public function setMaxWeight($max_weight)
    {
        $this->container['max_weight'] = $max_weight;

        return $this;
    }

    /**
     * Gets name_en
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->container['name_en'];
    }

    /**
     * Sets name_en
     *
     * @param string $name_en 物流服务名称（英文）
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {
        $this->container['name_en'] = $name_en;

        return $this;
    }

    /**
     * Gets name_zh
     *
     * @return string
     */
    public function getNameZh()
    {
        return $this->container['name_zh'];
    }

    /**
     * Sets name_zh
     *
     * @param string $name_zh 物流服务名称（中文）
     *
     * @return $this
     */
    public function setNameZh($name_zh)
    {
        $this->container['name_zh'] = $name_zh;

        return $this;
    }

    /**
     * Gets service_id
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['service_id'];
    }

    /**
     * Sets service_id
     *
     * @param string $service_id 物流服务ID
     *
     * @return $this
     */
    public function setServiceId($service_id)
    {
        $this->container['service_id'] = $service_id;

        return $this;
    }

    /**
     * Gets sum_length
     *
     * @return float
     */
    public function getSumLength()
    {
        return $this->container['sum_length'];
    }

    /**
     * Sets sum_length
     *
     * @param float $sum_length 三边之和上限（cm）
     *
     * @return $this
     */
    public function setSumLength($sum_length)
    {
        $this->container['sum_length'] = $sum_length;

        return $this;
    }

    /**
     * Gets support_battery_type
     *
     * @return string
     */
    public function getSupportBatteryType()
    {
        return $this->container['support_battery_type'];
    }

    /**
     * Sets support_battery_type
     *
     * @param string $support_battery_type 是否支持带电
     *
     * @return $this
     */
    public function setSupportBatteryType($support_battery_type)
    {
        $this->container['support_battery_type'] = $support_battery_type;

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


