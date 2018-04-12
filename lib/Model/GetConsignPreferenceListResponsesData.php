<?php
/**
 * GetConsignPreferenceListResponsesData
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
 * GetConsignPreferenceListResponsesData Class Doc Comment
 *
 * @category Class
 * @description 地址分页信息
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetConsignPreferenceListResponsesData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'GetConsignPreferenceListResponsesData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consign_preference_list' => '\Swagger\Client\Model\ConsignPreferenceInfoResponses[]',
        'page_number' => 'int',
        'page_size' => 'int',
        'toal_page_number' => 'int',
        'total_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consign_preference_list' => null,
        'page_number' => 'int32',
        'page_size' => 'int32',
        'toal_page_number' => 'int32',
        'total_count' => 'int32'
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
        'consign_preference_list' => 'consignPreferenceList',
        'page_number' => 'pageNumber',
        'page_size' => 'pageSize',
        'toal_page_number' => 'toalPageNumber',
        'total_count' => 'totalCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consign_preference_list' => 'setConsignPreferenceList',
        'page_number' => 'setPageNumber',
        'page_size' => 'setPageSize',
        'toal_page_number' => 'setToalPageNumber',
        'total_count' => 'setTotalCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consign_preference_list' => 'getConsignPreferenceList',
        'page_number' => 'getPageNumber',
        'page_size' => 'getPageSize',
        'toal_page_number' => 'getToalPageNumber',
        'total_count' => 'getTotalCount'
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
        $this->container['consign_preference_list'] = isset($data['consign_preference_list']) ? $data['consign_preference_list'] : null;
        $this->container['page_number'] = isset($data['page_number']) ? $data['page_number'] : null;
        $this->container['page_size'] = isset($data['page_size']) ? $data['page_size'] : null;
        $this->container['toal_page_number'] = isset($data['toal_page_number']) ? $data['toal_page_number'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['consign_preference_list'] === null) {
            $invalidProperties[] = "'consign_preference_list' can't be null";
        }
        if ($this->container['page_number'] === null) {
            $invalidProperties[] = "'page_number' can't be null";
        }
        if ($this->container['page_size'] === null) {
            $invalidProperties[] = "'page_size' can't be null";
        }
        if ($this->container['toal_page_number'] === null) {
            $invalidProperties[] = "'toal_page_number' can't be null";
        }
        if ($this->container['total_count'] === null) {
            $invalidProperties[] = "'total_count' can't be null";
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

        if ($this->container['consign_preference_list'] === null) {
            return false;
        }
        if ($this->container['page_number'] === null) {
            return false;
        }
        if ($this->container['page_size'] === null) {
            return false;
        }
        if ($this->container['toal_page_number'] === null) {
            return false;
        }
        if ($this->container['total_count'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets consign_preference_list
     *
     * @return \Swagger\Client\Model\ConsignPreferenceInfoResponses[]
     */
    public function getConsignPreferenceList()
    {
        return $this->container['consign_preference_list'];
    }

    /**
     * Sets consign_preference_list
     *
     * @param \Swagger\Client\Model\ConsignPreferenceInfoResponses[] $consign_preference_list consign_preference_list
     *
     * @return $this
     */
    public function setConsignPreferenceList($consign_preference_list)
    {
        $this->container['consign_preference_list'] = $consign_preference_list;

        return $this;
    }

    /**
     * Gets page_number
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['page_number'];
    }

    /**
     * Sets page_number
     *
     * @param int $page_number 当前页码
     *
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        $this->container['page_number'] = $page_number;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int $page_size 当前分页大小
     *
     * @return $this
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets toal_page_number
     *
     * @return int
     */
    public function getToalPageNumber()
    {
        return $this->container['toal_page_number'];
    }

    /**
     * Sets toal_page_number
     *
     * @param int $toal_page_number 总页数
     *
     * @return $this
     */
    public function setToalPageNumber($toal_page_number)
    {
        $this->container['toal_page_number'] = $toal_page_number;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int $total_count 总记录数
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

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


