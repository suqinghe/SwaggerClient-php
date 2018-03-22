<?php
/**
 * ItemRequest
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
 * ItemRequest Class Doc Comment
 *
 * @category Class
 * @description 货品列表，至少一个
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'buyer_id' => 'string',
        'currency_code' => 'string',
        'email' => 'string',
        'item_id' => 'string',
        'item_title' => 'string',
        'message' => 'string',
        'note' => 'string',
        'order_id' => 'string',
        'order_line_item' => 'string',
        'pay_pal_email' => 'string',
        'pay_pal_message' => 'string',
        'payment_date' => '\DateTime',
        'posted_qty' => 'int',
        'received_amount' => 'float',
        'site_id' => 'int',
        'sku' => '\Swagger\Client\Model\SkuRequest',
        'sold_date' => '\DateTime',
        'sold_price' => 'float',
        'sold_qty' => 'int',
        'transaction_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'buyer_id' => null,
        'currency_code' => null,
        'email' => null,
        'item_id' => null,
        'item_title' => null,
        'message' => null,
        'note' => null,
        'order_id' => null,
        'order_line_item' => null,
        'pay_pal_email' => null,
        'pay_pal_message' => null,
        'payment_date' => 'date-time',
        'posted_qty' => 'int32',
        'received_amount' => null,
        'site_id' => 'int32',
        'sku' => null,
        'sold_date' => 'date-time',
        'sold_price' => null,
        'sold_qty' => 'int32',
        'transaction_id' => null
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
        'buyer_id' => 'buyerId',
        'currency_code' => 'currencyCode',
        'email' => 'email',
        'item_id' => 'itemId',
        'item_title' => 'itemTitle',
        'message' => 'message',
        'note' => 'note',
        'order_id' => 'orderId',
        'order_line_item' => 'orderLineItem',
        'pay_pal_email' => 'payPalEmail',
        'pay_pal_message' => 'payPalMessage',
        'payment_date' => 'paymentDate',
        'posted_qty' => 'postedQty',
        'received_amount' => 'receivedAmount',
        'site_id' => 'siteId',
        'sku' => 'sku',
        'sold_date' => 'soldDate',
        'sold_price' => 'soldPrice',
        'sold_qty' => 'soldQty',
        'transaction_id' => 'transactionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'buyer_id' => 'setBuyerId',
        'currency_code' => 'setCurrencyCode',
        'email' => 'setEmail',
        'item_id' => 'setItemId',
        'item_title' => 'setItemTitle',
        'message' => 'setMessage',
        'note' => 'setNote',
        'order_id' => 'setOrderId',
        'order_line_item' => 'setOrderLineItem',
        'pay_pal_email' => 'setPayPalEmail',
        'pay_pal_message' => 'setPayPalMessage',
        'payment_date' => 'setPaymentDate',
        'posted_qty' => 'setPostedQty',
        'received_amount' => 'setReceivedAmount',
        'site_id' => 'setSiteId',
        'sku' => 'setSku',
        'sold_date' => 'setSoldDate',
        'sold_price' => 'setSoldPrice',
        'sold_qty' => 'setSoldQty',
        'transaction_id' => 'setTransactionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'buyer_id' => 'getBuyerId',
        'currency_code' => 'getCurrencyCode',
        'email' => 'getEmail',
        'item_id' => 'getItemId',
        'item_title' => 'getItemTitle',
        'message' => 'getMessage',
        'note' => 'getNote',
        'order_id' => 'getOrderId',
        'order_line_item' => 'getOrderLineItem',
        'pay_pal_email' => 'getPayPalEmail',
        'pay_pal_message' => 'getPayPalMessage',
        'payment_date' => 'getPaymentDate',
        'posted_qty' => 'getPostedQty',
        'received_amount' => 'getReceivedAmount',
        'site_id' => 'getSiteId',
        'sku' => 'getSku',
        'sold_date' => 'getSoldDate',
        'sold_price' => 'getSoldPrice',
        'sold_qty' => 'getSoldQty',
        'transaction_id' => 'getTransactionId'
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
        $this->container['buyer_id'] = isset($data['buyer_id']) ? $data['buyer_id'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_title'] = isset($data['item_title']) ? $data['item_title'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['order_line_item'] = isset($data['order_line_item']) ? $data['order_line_item'] : null;
        $this->container['pay_pal_email'] = isset($data['pay_pal_email']) ? $data['pay_pal_email'] : null;
        $this->container['pay_pal_message'] = isset($data['pay_pal_message']) ? $data['pay_pal_message'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['posted_qty'] = isset($data['posted_qty']) ? $data['posted_qty'] : null;
        $this->container['received_amount'] = isset($data['received_amount']) ? $data['received_amount'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['sold_date'] = isset($data['sold_date']) ? $data['sold_date'] : null;
        $this->container['sold_price'] = isset($data['sold_price']) ? $data['sold_price'] : null;
        $this->container['sold_qty'] = isset($data['sold_qty']) ? $data['sold_qty'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['buyer_id'] === null) {
            $invalidProperties[] = "'buyer_id' can't be null";
        }
        if ($this->container['item_id'] === null) {
            $invalidProperties[] = "'item_id' can't be null";
        }
        if ($this->container['order_line_item'] === null) {
            $invalidProperties[] = "'order_line_item' can't be null";
        }
        if ($this->container['posted_qty'] === null) {
            $invalidProperties[] = "'posted_qty' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
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

        if ($this->container['buyer_id'] === null) {
            return false;
        }
        if ($this->container['item_id'] === null) {
            return false;
        }
        if ($this->container['order_line_item'] === null) {
            return false;
        }
        if ($this->container['posted_qty'] === null) {
            return false;
        }
        if ($this->container['sku'] === null) {
            return false;
        }
        if ($this->container['transaction_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets buyer_id
     *
     * @return string
     */
    public function getBuyerId()
    {
        return $this->container['buyer_id'];
    }

    /**
     * Sets buyer_id
     *
     * @param string $buyer_id eBayä¹°å®¶ID
     *
     * @return $this
     */
    public function setBuyerId($buyer_id)
    {
        $this->container['buyer_id'] = $buyer_id;

        return $this;
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
     * @param string $currency_code è´§å¸ç¬¦å·,é»è®¤ä¸ºUSD
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email ä¹°å®¶eBayçµé®
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id eBayç©åå·
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_title
     *
     * @return string
     */
    public function getItemTitle()
    {
        return $this->container['item_title'];
    }

    /**
     * Sets item_title
     *
     * @param string $item_title eBayååæ é¢
     *
     * @return $this
     */
    public function setItemTitle($item_title)
    {
        $this->container['item_title'] = $item_title;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message ä¹°å®¶eBayçè¨
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note éæ³¨
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id eBayåå¹¶è®¢åæ¶çæçä¸ä¸ªæ°çOrder ID
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_line_item
     *
     * @return string
     */
    public function getOrderLineItem()
    {
        return $this->container['order_line_item'];
    }

    /**
     * Sets order_line_item
     *
     * @param string $order_line_item eBay交易行ID
     *
     * @return $this
     */
    public function setOrderLineItem($order_line_item)
    {
        $this->container['order_line_item'] = $order_line_item;

        return $this;
    }

    /**
     * Gets pay_pal_email
     *
     * @return string
     */
    public function getPayPalEmail()
    {
        return $this->container['pay_pal_email'];
    }

    /**
     * Sets pay_pal_email
     *
     * @param string $pay_pal_email 买家PayPal电邮地址
     *
     * @return $this
     */
    public function setPayPalEmail($pay_pal_email)
    {
        $this->container['pay_pal_email'] = $pay_pal_email;

        return $this;
    }

    /**
     * Gets pay_pal_message
     *
     * @return string
     */
    public function getPayPalMessage()
    {
        return $this->container['pay_pal_message'];
    }

    /**
     * Sets pay_pal_message
     *
     * @param string $pay_pal_message 买家PayPal留言
     *
     * @return $this
     */
    public function setPayPalMessage($pay_pal_message)
    {
        $this->container['pay_pal_message'] = $pay_pal_message;

        return $this;
    }

    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date 买家付款日期
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {
        $this->container['payment_date'] = $payment_date;

        return $this;
    }

    /**
     * Gets posted_qty
     *
     * @return int
     */
    public function getPostedQty()
    {
        return $this->container['posted_qty'];
    }

    /**
     * Sets posted_qty
     *
     * @param int $posted_qty 寄货数量，不能为0
     *
     * @return $this
     */
    public function setPostedQty($posted_qty)
    {
        $this->container['posted_qty'] = $posted_qty;

        return $this;
    }

    /**
     * Gets received_amount
     *
     * @return float
     */
    public function getReceivedAmount()
    {
        return $this->container['received_amount'];
    }

    /**
     * Sets received_amount
     *
     * @param float $received_amount 实际收到金额,必须大于0.01
     *
     * @return $this
     */
    public function setReceivedAmount($received_amount)
    {
        $this->container['received_amount'] = $received_amount;

        return $this;
    }

    /**
     * Gets site_id
     *
     * @return int
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     *
     * @param int $site_id 站点ID
     *
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return \Swagger\Client\Model\SkuRequest
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param \Swagger\Client\Model\SkuRequest $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets sold_date
     *
     * @return \DateTime
     */
    public function getSoldDate()
    {
        return $this->container['sold_date'];
    }

    /**
     * Sets sold_date
     *
     * @param \DateTime $sold_date 卖出日期
     *
     * @return $this
     */
    public function setSoldDate($sold_date)
    {
        $this->container['sold_date'] = $sold_date;

        return $this;
    }

    /**
     * Gets sold_price
     *
     * @return float
     */
    public function getSoldPrice()
    {
        return $this->container['sold_price'];
    }

    /**
     * Sets sold_price
     *
     * @param float $sold_price 卖出总价,必须大于0.01
     *
     * @return $this
     */
    public function setSoldPrice($sold_price)
    {
        $this->container['sold_price'] = $sold_price;

        return $this;
    }

    /**
     * Gets sold_qty
     *
     * @return int
     */
    public function getSoldQty()
    {
        return $this->container['sold_qty'];
    }

    /**
     * Sets sold_qty
     *
     * @param int $sold_qty 卖出数量
     *
     * @return $this
     */
    public function setSoldQty($sold_qty)
    {
        $this->container['sold_qty'] = $sold_qty;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id eBay交易号
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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


