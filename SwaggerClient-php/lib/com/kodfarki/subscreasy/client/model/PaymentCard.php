<?php
/**
 * PaymentCard
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
 * PaymentCard Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_alias' => 'string',
        'card_expiry' => 'string',
        'card_family' => 'string',
        'card_holder_name' => 'string',
        'card_number' => 'string',
        'card_token' => 'string',
        'card_user_key' => 'string',
        'cvc' => 'string',
        'expire_month' => 'string',
        'expire_year' => 'string',
        'register_card' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_alias' => null,
        'card_expiry' => null,
        'card_family' => null,
        'card_holder_name' => null,
        'card_number' => null,
        'card_token' => null,
        'card_user_key' => null,
        'cvc' => null,
        'expire_month' => null,
        'expire_year' => null,
        'register_card' => 'int32'
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
        'card_alias' => 'cardAlias',
        'card_expiry' => 'cardExpiry',
        'card_family' => 'cardFamily',
        'card_holder_name' => 'cardHolderName',
        'card_number' => 'cardNumber',
        'card_token' => 'cardToken',
        'card_user_key' => 'cardUserKey',
        'cvc' => 'cvc',
        'expire_month' => 'expireMonth',
        'expire_year' => 'expireYear',
        'register_card' => 'registerCard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_alias' => 'setCardAlias',
        'card_expiry' => 'setCardExpiry',
        'card_family' => 'setCardFamily',
        'card_holder_name' => 'setCardHolderName',
        'card_number' => 'setCardNumber',
        'card_token' => 'setCardToken',
        'card_user_key' => 'setCardUserKey',
        'cvc' => 'setCvc',
        'expire_month' => 'setExpireMonth',
        'expire_year' => 'setExpireYear',
        'register_card' => 'setRegisterCard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_alias' => 'getCardAlias',
        'card_expiry' => 'getCardExpiry',
        'card_family' => 'getCardFamily',
        'card_holder_name' => 'getCardHolderName',
        'card_number' => 'getCardNumber',
        'card_token' => 'getCardToken',
        'card_user_key' => 'getCardUserKey',
        'cvc' => 'getCvc',
        'expire_month' => 'getExpireMonth',
        'expire_year' => 'getExpireYear',
        'register_card' => 'getRegisterCard'
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
        $this->container['card_alias'] = isset($data['card_alias']) ? $data['card_alias'] : null;
        $this->container['card_expiry'] = isset($data['card_expiry']) ? $data['card_expiry'] : null;
        $this->container['card_family'] = isset($data['card_family']) ? $data['card_family'] : null;
        $this->container['card_holder_name'] = isset($data['card_holder_name']) ? $data['card_holder_name'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['card_token'] = isset($data['card_token']) ? $data['card_token'] : null;
        $this->container['card_user_key'] = isset($data['card_user_key']) ? $data['card_user_key'] : null;
        $this->container['cvc'] = isset($data['cvc']) ? $data['cvc'] : null;
        $this->container['expire_month'] = isset($data['expire_month']) ? $data['expire_month'] : null;
        $this->container['expire_year'] = isset($data['expire_year']) ? $data['expire_year'] : null;
        $this->container['register_card'] = isset($data['register_card']) ? $data['register_card'] : null;
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
     * Gets card_alias
     *
     * @return string
     */
    public function getCardAlias()
    {
        return $this->container['card_alias'];
    }

    /**
     * Sets card_alias
     *
     * @param string $card_alias card_alias
     *
     * @return $this
     */
    public function setCardAlias($card_alias)
    {
        $this->container['card_alias'] = $card_alias;

        return $this;
    }

    /**
     * Gets card_expiry
     *
     * @return string
     */
    public function getCardExpiry()
    {
        return $this->container['card_expiry'];
    }

    /**
     * Sets card_expiry
     *
     * @param string $card_expiry card_expiry
     *
     * @return $this
     */
    public function setCardExpiry($card_expiry)
    {
        $this->container['card_expiry'] = $card_expiry;

        return $this;
    }

    /**
     * Gets card_family
     *
     * @return string
     */
    public function getCardFamily()
    {
        return $this->container['card_family'];
    }

    /**
     * Sets card_family
     *
     * @param string $card_family card_family
     *
     * @return $this
     */
    public function setCardFamily($card_family)
    {
        $this->container['card_family'] = $card_family;

        return $this;
    }

    /**
     * Gets card_holder_name
     *
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->container['card_holder_name'];
    }

    /**
     * Sets card_holder_name
     *
     * @param string $card_holder_name card_holder_name
     *
     * @return $this
     */
    public function setCardHolderName($card_holder_name)
    {
        $this->container['card_holder_name'] = $card_holder_name;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number card_number
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_token
     *
     * @return string
     */
    public function getCardToken()
    {
        return $this->container['card_token'];
    }

    /**
     * Sets card_token
     *
     * @param string $card_token card_token
     *
     * @return $this
     */
    public function setCardToken($card_token)
    {
        $this->container['card_token'] = $card_token;

        return $this;
    }

    /**
     * Gets card_user_key
     *
     * @return string
     */
    public function getCardUserKey()
    {
        return $this->container['card_user_key'];
    }

    /**
     * Sets card_user_key
     *
     * @param string $card_user_key card_user_key
     *
     * @return $this
     */
    public function setCardUserKey($card_user_key)
    {
        $this->container['card_user_key'] = $card_user_key;

        return $this;
    }

    /**
     * Gets cvc
     *
     * @return string
     */
    public function getCvc()
    {
        return $this->container['cvc'];
    }

    /**
     * Sets cvc
     *
     * @param string $cvc cvc
     *
     * @return $this
     */
    public function setCvc($cvc)
    {
        $this->container['cvc'] = $cvc;

        return $this;
    }

    /**
     * Gets expire_month
     *
     * @return string
     */
    public function getExpireMonth()
    {
        return $this->container['expire_month'];
    }

    /**
     * Sets expire_month
     *
     * @param string $expire_month expire_month
     *
     * @return $this
     */
    public function setExpireMonth($expire_month)
    {
        $this->container['expire_month'] = $expire_month;

        return $this;
    }

    /**
     * Gets expire_year
     *
     * @return string
     */
    public function getExpireYear()
    {
        return $this->container['expire_year'];
    }

    /**
     * Sets expire_year
     *
     * @param string $expire_year expire_year
     *
     * @return $this
     */
    public function setExpireYear($expire_year)
    {
        $this->container['expire_year'] = $expire_year;

        return $this;
    }

    /**
     * Gets register_card
     *
     * @return int
     */
    public function getRegisterCard()
    {
        return $this->container['register_card'];
    }

    /**
     * Sets register_card
     *
     * @param int $register_card register_card
     *
     * @return $this
     */
    public function setRegisterCard($register_card)
    {
        $this->container['register_card'] = $register_card;

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


