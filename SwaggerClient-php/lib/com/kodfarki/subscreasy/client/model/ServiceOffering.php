<?php
/**
 * ServiceOffering
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
 * ServiceOffering Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceOffering implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceOffering';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\Company',
        'description' => 'string',
        'id' => 'int',
        'offer' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\Offer',
        'over_usage_price' => 'float',
        'over_usage_quota' => 'float',
        'price' => 'float',
        'quota_amount' => 'float',
        'service' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\Service',
        'unit_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company' => null,
        'description' => null,
        'id' => 'int64',
        'offer' => null,
        'over_usage_price' => null,
        'over_usage_quota' => null,
        'price' => null,
        'quota_amount' => null,
        'service' => null,
        'unit_name' => null
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
        'company' => 'company',
        'description' => 'description',
        'id' => 'id',
        'offer' => 'offer',
        'over_usage_price' => 'overUsagePrice',
        'over_usage_quota' => 'overUsageQuota',
        'price' => 'price',
        'quota_amount' => 'quotaAmount',
        'service' => 'service',
        'unit_name' => 'unitName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
        'description' => 'setDescription',
        'id' => 'setId',
        'offer' => 'setOffer',
        'over_usage_price' => 'setOverUsagePrice',
        'over_usage_quota' => 'setOverUsageQuota',
        'price' => 'setPrice',
        'quota_amount' => 'setQuotaAmount',
        'service' => 'setService',
        'unit_name' => 'setUnitName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
        'description' => 'getDescription',
        'id' => 'getId',
        'offer' => 'getOffer',
        'over_usage_price' => 'getOverUsagePrice',
        'over_usage_quota' => 'getOverUsageQuota',
        'price' => 'getPrice',
        'quota_amount' => 'getQuotaAmount',
        'service' => 'getService',
        'unit_name' => 'getUnitName'
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
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['offer'] = isset($data['offer']) ? $data['offer'] : null;
        $this->container['over_usage_price'] = isset($data['over_usage_price']) ? $data['over_usage_price'] : null;
        $this->container['over_usage_quota'] = isset($data['over_usage_quota']) ? $data['over_usage_quota'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['quota_amount'] = isset($data['quota_amount']) ? $data['quota_amount'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['unit_name'] = isset($data['unit_name']) ? $data['unit_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['offer'] === null) {
            $invalidProperties[] = "'offer' can't be null";
        }
        if ($this->container['quota_amount'] === null) {
            $invalidProperties[] = "'quota_amount' can't be null";
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

        if ($this->container['offer'] === null) {
            return false;
        }
        if ($this->container['quota_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets company
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\Company $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\Offer $offer offer
     *
     * @return $this
     */
    public function setOffer($offer)
    {
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets over_usage_price
     *
     * @return float
     */
    public function getOverUsagePrice()
    {
        return $this->container['over_usage_price'];
    }

    /**
     * Sets over_usage_price
     *
     * @param float $over_usage_price over_usage_price
     *
     * @return $this
     */
    public function setOverUsagePrice($over_usage_price)
    {
        $this->container['over_usage_price'] = $over_usage_price;

        return $this;
    }

    /**
     * Gets over_usage_quota
     *
     * @return float
     */
    public function getOverUsageQuota()
    {
        return $this->container['over_usage_quota'];
    }

    /**
     * Sets over_usage_quota
     *
     * @param float $over_usage_quota over_usage_quota
     *
     * @return $this
     */
    public function setOverUsageQuota($over_usage_quota)
    {
        $this->container['over_usage_quota'] = $over_usage_quota;

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
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets quota_amount
     *
     * @return float
     */
    public function getQuotaAmount()
    {
        return $this->container['quota_amount'];
    }

    /**
     * Sets quota_amount
     *
     * @param float $quota_amount quota_amount
     *
     * @return $this
     */
    public function setQuotaAmount($quota_amount)
    {
        $this->container['quota_amount'] = $quota_amount;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \Swagger\Client\com.kodfarki.subscreasy.client.model\Service
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \Swagger\Client\com.kodfarki.subscreasy.client.model\Service $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets unit_name
     *
     * @return string
     */
    public function getUnitName()
    {
        return $this->container['unit_name'];
    }

    /**
     * Sets unit_name
     *
     * @param string $unit_name unit_name
     *
     * @return $this
     */
    public function setUnitName($unit_name)
    {
        $this->container['unit_name'] = $unit_name;

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


