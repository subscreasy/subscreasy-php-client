<?php
/**
 * WebHookRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Api Documentation
 *
 * Api Documentation
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\com.kodfarki.subscreasy.client.model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * WebHookRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebHookRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebHookRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_log' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog',
        'saved_card' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard',
        'subscriber' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber',
        'subscription' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription',
        'tx_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_log' => null,
        'saved_card' => null,
        'subscriber' => null,
        'subscription' => null,
        'tx_id' => null
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
        'payment_log' => 'paymentLog',
        'saved_card' => 'savedCard',
        'subscriber' => 'subscriber',
        'subscription' => 'subscription',
        'tx_id' => 'txId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_log' => 'setPaymentLog',
        'saved_card' => 'setSavedCard',
        'subscriber' => 'setSubscriber',
        'subscription' => 'setSubscription',
        'tx_id' => 'setTxId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_log' => 'getPaymentLog',
        'saved_card' => 'getSavedCard',
        'subscriber' => 'getSubscriber',
        'subscription' => 'getSubscription',
        'tx_id' => 'getTxId'
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
        $this->container['payment_log'] = isset($data['payment_log']) ? $data['payment_log'] : null;
        $this->container['saved_card'] = isset($data['saved_card']) ? $data['saved_card'] : null;
        $this->container['subscriber'] = isset($data['subscriber']) ? $data['subscriber'] : null;
        $this->container['subscription'] = isset($data['subscription']) ? $data['subscription'] : null;
        $this->container['tx_id'] = isset($data['tx_id']) ? $data['tx_id'] : null;
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

        return true;
    }


    /**
     * Gets payment_log
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog
     */
    public function getPaymentLog()
    {
        return $this->container['payment_log'];
    }

    /**
     * Sets payment_log
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\ChargingLog $payment_log payment_log
     *
     * @return $this
     */
    public function setPaymentLog($payment_log)
    {
        $this->container['payment_log'] = $payment_log;

        return $this;
    }

    /**
     * Gets saved_card
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard
     */
    public function getSavedCard()
    {
        return $this->container['saved_card'];
    }

    /**
     * Sets saved_card
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\SavedCard $saved_card saved_card
     *
     * @return $this
     */
    public function setSavedCard($saved_card)
    {
        $this->container['saved_card'] = $saved_card;

        return $this;
    }

    /**
     * Gets subscriber
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber
     */
    public function getSubscriber()
    {
        return $this->container['subscriber'];
    }

    /**
     * Sets subscriber
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\Subscriber $subscriber subscriber
     *
     * @return $this
     */
    public function setSubscriber($subscriber)
    {
        $this->container['subscriber'] = $subscriber;

        return $this;
    }

    /**
     * Gets subscription
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription
     */
    public function getSubscription()
    {
        return $this->container['subscription'];
    }

    /**
     * Sets subscription
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\Subsription $subscription subscription
     *
     * @return $this
     */
    public function setSubscription($subscription)
    {
        $this->container['subscription'] = $subscription;

        return $this;
    }

    /**
     * Gets tx_id
     *
     * @return string
     */
    public function getTxId()
    {
        return $this->container['tx_id'];
    }

    /**
     * Sets tx_id
     *
     * @param string $tx_id tx_id
     *
     * @return $this
     */
    public function setTxId($tx_id)
    {
        $this->container['tx_id'] = $tx_id;

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


