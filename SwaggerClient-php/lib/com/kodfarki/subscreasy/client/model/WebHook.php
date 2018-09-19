<?php
/**
 * WebHook
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
 * WebHook Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebHook implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebHook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authentication_key' => 'string',
        'company' => '\Swagger\Client\com.kodfarki.subscreasy.client.model\Company',
        'id' => 'int',
        'payment_updated' => 'bool',
        'server_url' => 'string',
        'subscriber_created' => 'bool',
        'subscriber_updated' => 'bool',
        'subscription_created' => 'bool',
        'subscription_ended' => 'bool',
        'subscription_reactivated' => 'bool',
        'subscription_renewal_failed' => 'bool',
        'subscription_renewed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authentication_key' => null,
        'company' => null,
        'id' => 'int64',
        'payment_updated' => null,
        'server_url' => null,
        'subscriber_created' => null,
        'subscriber_updated' => null,
        'subscription_created' => null,
        'subscription_ended' => null,
        'subscription_reactivated' => null,
        'subscription_renewal_failed' => null,
        'subscription_renewed' => null
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
        'authentication_key' => 'authenticationKey',
        'company' => 'company',
        'id' => 'id',
        'payment_updated' => 'paymentUpdated',
        'server_url' => 'serverUrl',
        'subscriber_created' => 'subscriberCreated',
        'subscriber_updated' => 'subscriberUpdated',
        'subscription_created' => 'subscriptionCreated',
        'subscription_ended' => 'subscriptionEnded',
        'subscription_reactivated' => 'subscriptionReactivated',
        'subscription_renewal_failed' => 'subscriptionRenewalFailed',
        'subscription_renewed' => 'subscriptionRenewed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authentication_key' => 'setAuthenticationKey',
        'company' => 'setCompany',
        'id' => 'setId',
        'payment_updated' => 'setPaymentUpdated',
        'server_url' => 'setServerUrl',
        'subscriber_created' => 'setSubscriberCreated',
        'subscriber_updated' => 'setSubscriberUpdated',
        'subscription_created' => 'setSubscriptionCreated',
        'subscription_ended' => 'setSubscriptionEnded',
        'subscription_reactivated' => 'setSubscriptionReactivated',
        'subscription_renewal_failed' => 'setSubscriptionRenewalFailed',
        'subscription_renewed' => 'setSubscriptionRenewed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authentication_key' => 'getAuthenticationKey',
        'company' => 'getCompany',
        'id' => 'getId',
        'payment_updated' => 'getPaymentUpdated',
        'server_url' => 'getServerUrl',
        'subscriber_created' => 'getSubscriberCreated',
        'subscriber_updated' => 'getSubscriberUpdated',
        'subscription_created' => 'getSubscriptionCreated',
        'subscription_ended' => 'getSubscriptionEnded',
        'subscription_reactivated' => 'getSubscriptionReactivated',
        'subscription_renewal_failed' => 'getSubscriptionRenewalFailed',
        'subscription_renewed' => 'getSubscriptionRenewed'
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
        $this->container['authentication_key'] = isset($data['authentication_key']) ? $data['authentication_key'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['payment_updated'] = isset($data['payment_updated']) ? $data['payment_updated'] : null;
        $this->container['server_url'] = isset($data['server_url']) ? $data['server_url'] : null;
        $this->container['subscriber_created'] = isset($data['subscriber_created']) ? $data['subscriber_created'] : null;
        $this->container['subscriber_updated'] = isset($data['subscriber_updated']) ? $data['subscriber_updated'] : null;
        $this->container['subscription_created'] = isset($data['subscription_created']) ? $data['subscription_created'] : null;
        $this->container['subscription_ended'] = isset($data['subscription_ended']) ? $data['subscription_ended'] : null;
        $this->container['subscription_reactivated'] = isset($data['subscription_reactivated']) ? $data['subscription_reactivated'] : null;
        $this->container['subscription_renewal_failed'] = isset($data['subscription_renewal_failed']) ? $data['subscription_renewal_failed'] : null;
        $this->container['subscription_renewed'] = isset($data['subscription_renewed']) ? $data['subscription_renewed'] : null;
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
     * Gets authentication_key
     *
     * @return string
     */
    public function getAuthenticationKey()
    {
        return $this->container['authentication_key'];
    }

    /**
     * Sets authentication_key
     *
     * @param string $authentication_key authentication_key
     *
     * @return $this
     */
    public function setAuthenticationKey($authentication_key)
    {
        $this->container['authentication_key'] = $authentication_key;

        return $this;
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
     * Gets payment_updated
     *
     * @return bool
     */
    public function getPaymentUpdated()
    {
        return $this->container['payment_updated'];
    }

    /**
     * Sets payment_updated
     *
     * @param bool $payment_updated payment_updated
     *
     * @return $this
     */
    public function setPaymentUpdated($payment_updated)
    {
        $this->container['payment_updated'] = $payment_updated;

        return $this;
    }

    /**
     * Gets server_url
     *
     * @return string
     */
    public function getServerUrl()
    {
        return $this->container['server_url'];
    }

    /**
     * Sets server_url
     *
     * @param string $server_url server_url
     *
     * @return $this
     */
    public function setServerUrl($server_url)
    {
        $this->container['server_url'] = $server_url;

        return $this;
    }

    /**
     * Gets subscriber_created
     *
     * @return bool
     */
    public function getSubscriberCreated()
    {
        return $this->container['subscriber_created'];
    }

    /**
     * Sets subscriber_created
     *
     * @param bool $subscriber_created subscriber_created
     *
     * @return $this
     */
    public function setSubscriberCreated($subscriber_created)
    {
        $this->container['subscriber_created'] = $subscriber_created;

        return $this;
    }

    /**
     * Gets subscriber_updated
     *
     * @return bool
     */
    public function getSubscriberUpdated()
    {
        return $this->container['subscriber_updated'];
    }

    /**
     * Sets subscriber_updated
     *
     * @param bool $subscriber_updated subscriber_updated
     *
     * @return $this
     */
    public function setSubscriberUpdated($subscriber_updated)
    {
        $this->container['subscriber_updated'] = $subscriber_updated;

        return $this;
    }

    /**
     * Gets subscription_created
     *
     * @return bool
     */
    public function getSubscriptionCreated()
    {
        return $this->container['subscription_created'];
    }

    /**
     * Sets subscription_created
     *
     * @param bool $subscription_created subscription_created
     *
     * @return $this
     */
    public function setSubscriptionCreated($subscription_created)
    {
        $this->container['subscription_created'] = $subscription_created;

        return $this;
    }

    /**
     * Gets subscription_ended
     *
     * @return bool
     */
    public function getSubscriptionEnded()
    {
        return $this->container['subscription_ended'];
    }

    /**
     * Sets subscription_ended
     *
     * @param bool $subscription_ended subscription_ended
     *
     * @return $this
     */
    public function setSubscriptionEnded($subscription_ended)
    {
        $this->container['subscription_ended'] = $subscription_ended;

        return $this;
    }

    /**
     * Gets subscription_reactivated
     *
     * @return bool
     */
    public function getSubscriptionReactivated()
    {
        return $this->container['subscription_reactivated'];
    }

    /**
     * Sets subscription_reactivated
     *
     * @param bool $subscription_reactivated subscription_reactivated
     *
     * @return $this
     */
    public function setSubscriptionReactivated($subscription_reactivated)
    {
        $this->container['subscription_reactivated'] = $subscription_reactivated;

        return $this;
    }

    /**
     * Gets subscription_renewal_failed
     *
     * @return bool
     */
    public function getSubscriptionRenewalFailed()
    {
        return $this->container['subscription_renewal_failed'];
    }

    /**
     * Sets subscription_renewal_failed
     *
     * @param bool $subscription_renewal_failed subscription_renewal_failed
     *
     * @return $this
     */
    public function setSubscriptionRenewalFailed($subscription_renewal_failed)
    {
        $this->container['subscription_renewal_failed'] = $subscription_renewal_failed;

        return $this;
    }

    /**
     * Gets subscription_renewed
     *
     * @return bool
     */
    public function getSubscriptionRenewed()
    {
        return $this->container['subscription_renewed'];
    }

    /**
     * Sets subscription_renewed
     *
     * @param bool $subscription_renewed subscription_renewed
     *
     * @return $this
     */
    public function setSubscriptionRenewed($subscription_renewed)
    {
        $this->container['subscription_renewed'] = $subscription_renewed;

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

