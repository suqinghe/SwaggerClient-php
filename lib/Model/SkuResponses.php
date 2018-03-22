<?php
/**
 * SkuResponses
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
 * SkuResponses Class Doc Comment
 *
 * @category Class
 * @description SKU信息
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SkuResponses implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SkuResponses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'height' => 'float',
        'is_li_battery' => 'bool',
        'length' => 'float',
        'name_en' => 'string',
        'name_zh' => 'string',
        'origin' => 'string',
        'price' => 'float',
        'remark' => 'string',
        'sku_currency_code' => 'string',
        'sku_number' => 'string',
        'tariff_code' => 'string',
        'weight' => 'float',
        'width' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'height' => null,
        'is_li_battery' => null,
        'length' => null,
        'name_en' => null,
        'name_zh' => null,
        'origin' => null,
        'price' => null,
        'remark' => null,
        'sku_currency_code' => null,
        'sku_number' => null,
        'tariff_code' => null,
        'weight' => null,
        'width' => null
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
        'height' => 'height',
        'is_li_battery' => 'isLiBattery',
        'length' => 'length',
        'name_en' => 'nameEn',
        'name_zh' => 'nameZh',
        'origin' => 'origin',
        'price' => 'price',
        'remark' => 'remark',
        'sku_currency_code' => 'skuCurrencyCode',
        'sku_number' => 'skuNumber',
        'tariff_code' => 'tariffCode',
        'weight' => 'weight',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'height' => 'setHeight',
        'is_li_battery' => 'setIsLiBattery',
        'length' => 'setLength',
        'name_en' => 'setNameEn',
        'name_zh' => 'setNameZh',
        'origin' => 'setOrigin',
        'price' => 'setPrice',
        'remark' => 'setRemark',
        'sku_currency_code' => 'setSkuCurrencyCode',
        'sku_number' => 'setSkuNumber',
        'tariff_code' => 'setTariffCode',
        'weight' => 'setWeight',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'height' => 'getHeight',
        'is_li_battery' => 'getIsLiBattery',
        'length' => 'getLength',
        'name_en' => 'getNameEn',
        'name_zh' => 'getNameZh',
        'origin' => 'getOrigin',
        'price' => 'getPrice',
        'remark' => 'getRemark',
        'sku_currency_code' => 'getSkuCurrencyCode',
        'sku_number' => 'getSkuNumber',
        'tariff_code' => 'getTariffCode',
        'weight' => 'getWeight',
        'width' => 'getWidth'
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
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['is_li_battery'] = isset($data['is_li_battery']) ? $data['is_li_battery'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
        $this->container['name_zh'] = isset($data['name_zh']) ? $data['name_zh'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['sku_currency_code'] = isset($data['sku_currency_code']) ? $data['sku_currency_code'] : null;
        $this->container['sku_number'] = isset($data['sku_number']) ? $data['sku_number'] : null;
        $this->container['tariff_code'] = isset($data['tariff_code']) ? $data['tariff_code'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['is_li_battery'] === null) {
            $invalidProperties[] = "'is_li_battery' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
        }
        if ($this->container['name_en'] === null) {
            $invalidProperties[] = "'name_en' can't be null";
        }
        if ($this->container['name_zh'] === null) {
            $invalidProperties[] = "'name_zh' can't be null";
        }
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['sku_currency_code'] === null) {
            $invalidProperties[] = "'sku_currency_code' can't be null";
        }
        if ($this->container['sku_number'] === null) {
            $invalidProperties[] = "'sku_number' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
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

        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['is_li_battery'] === null) {
            return false;
        }
        if ($this->container['length'] === null) {
            return false;
        }
        if ($this->container['name_en'] === null) {
            return false;
        }
        if ($this->container['name_zh'] === null) {
            return false;
        }
        if ($this->container['origin'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['sku_currency_code'] === null) {
            return false;
        }
        if ($this->container['sku_number'] === null) {
            return false;
        }
        if ($this->container['weight'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height 高度（cm）
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets is_li_battery
     *
     * @return bool
     */
    public function getIsLiBattery()
    {
        return $this->container['is_li_battery'];
    }

    /**
     * Sets is_li_battery
     *
     * @param bool $is_li_battery 是否带锂电池
     *
     * @return $this
     */
    public function setIsLiBattery($is_li_battery)
    {
        $this->container['is_li_battery'] = $is_li_battery;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float $length 长度（cm）
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
     * @param string $name_en 英文申报名
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
     * @param string $name_zh 中文申报名
     *
     * @return $this
     */
    public function setNameZh($name_zh)
    {
        $this->container['name_zh'] = $name_zh;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string $origin 原产地
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price 申报价格
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string $remark 备注
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets sku_currency_code
     *
     * @return string
     */
    public function getSkuCurrencyCode()
    {
        return $this->container['sku_currency_code'];
    }

    /**
     * Sets sku_currency_code
     *
     * @param string $sku_currency_code 申报价格货币
     *
     * @return $this
     */
    public function setSkuCurrencyCode($sku_currency_code)
    {
        $this->container['sku_currency_code'] = $sku_currency_code;

        return $this;
    }

    /**
     * Gets sku_number
     *
     * @return string
     */
    public function getSkuNumber()
    {
        return $this->container['sku_number'];
    }

    /**
     * Sets sku_number
     *
     * @param string $sku_number SKU编号
     *
     * @return $this
     */
    public function setSkuNumber($sku_number)
    {
        $this->container['sku_number'] = $sku_number;

        return $this;
    }

    /**
     * Gets tariff_code
     *
     * @return string
     */
    public function getTariffCode()
    {
        return $this->container['tariff_code'];
    }

    /**
     * Sets tariff_code
     *
     * @param string $tariff_code 关税代码
     *
     * @return $this
     */
    public function setTariffCode($tariff_code)
    {
        $this->container['tariff_code'] = $tariff_code;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight 重量（单位：g）
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width 宽度（cm）
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


