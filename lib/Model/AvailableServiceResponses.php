<?php
/**
 * AvailableServiceResponses
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
 * AvailableServiceResponses Class Doc Comment
 *
 * @category Class
 * @description 可用物流服务
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AvailableServiceResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AvailableServiceResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'currency_code' => 'string',
        'estimate_cost' => 'float',
        'service_name_en' => 'string',
        'service_name_zh' => 'string',
        'service_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'currency_code' => null,
        'estimate_cost' => null,
        'service_name_en' => null,
        'service_name_zh' => null,
        'service_id' => null
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
        'currency_code' => 'currencyCode',
        'estimate_cost' => 'estimateCost',
        'service_name_en' => 'serviceNameEn',
        'service_name_zh' => 'serviceNameZh',
        'service_id' => 'serviceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency_code' => 'setCurrencyCode',
        'estimate_cost' => 'setEstimateCost',
        'service_name_en' => 'setServiceNameEn',
        'service_name_zh' => 'setServiceNameZh',
        'service_id' => 'setServiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency_code' => 'getCurrencyCode',
        'estimate_cost' => 'getEstimateCost',
        'service_name_en' => 'getServiceNameEn',
        'service_name_zh' => 'getServiceNameZh',
        'service_id' => 'getServiceId'
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
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['estimate_cost'] = isset($data['estimate_cost']) ? $data['estimate_cost'] : null;
        $this->container['service_name_en'] = isset($data['service_name_en']) ? $data['service_name_en'] : null;
        $this->container['service_name_zh'] = isset($data['service_name_zh']) ? $data['service_name_zh'] : null;
        $this->container['service_id'] = isset($data['service_id']) ? $data['service_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['estimate_cost'] === null) {
            $invalidProperties[] = "'estimate_cost' can't be null";
        }
        if ($this->container['service_name_en'] === null) {
            $invalidProperties[] = "'service_name_en' can't be null";
        }
        if ($this->container['service_name_zh'] === null) {
            $invalidProperties[] = "'service_name_zh' can't be null";
        }
        if ($this->container['service_id'] === null) {
            $invalidProperties[] = "'service_id' can't be null";
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

        if ($this->container['currency_code'] === null) {
            return false;
        }
        if ($this->container['estimate_cost'] === null) {
            return false;
        }
        if ($this->container['service_name_en'] === null) {
            return false;
        }
        if ($this->container['service_name_zh'] === null) {
            return false;
        }
        if ($this->container['service_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code 预估运费币种
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets estimate_cost
     *
     * @return float
     */
    public function getEstimateCost()
    {
        return $this->container['estimate_cost'];
    }

    /**
     * Sets estimate_cost
     *
     * @param float $estimate_cost 预估运费金额
     *
     * @return $this
     */
    public function setEstimateCost($estimate_cost)
    {
        $this->container['estimate_cost'] = $estimate_cost;

        return $this;
    }

    /**
     * Gets service_name_en
     *
     * @return string
     */
    public function getServiceNameEn()
    {
        return $this->container['service_name_en'];
    }

    /**
     * Sets service_name_en
     *
     * @param string $service_name_en 物流服务名称（英文）
     *
     * @return $this
     */
    public function setServiceNameEn($service_name_en)
    {
        $this->container['service_name_en'] = $service_name_en;

        return $this;
    }

    /**
     * Gets service_name_zh
     *
     * @return string
     */
    public function getServiceNameZh()
    {
        return $this->container['service_name_zh'];
    }

    /**
     * Sets service_name_zh
     *
     * @param string $service_name_zh 物流服务名称（中文）
     *
     * @return $this
     */
    public function setServiceNameZh($service_name_zh)
    {
        $this->container['service_name_zh'] = $service_name_zh;

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


