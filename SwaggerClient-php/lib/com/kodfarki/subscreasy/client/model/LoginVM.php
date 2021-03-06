<?php
/**
 * LoginVM
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
 * LoginVM Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoginVM implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoginVM';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company' => 'string',
        'password' => 'string',
        'remember_me' => 'bool',
        'username' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company' => null,
        'password' => null,
        'remember_me' => null,
        'username' => null
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
        'password' => 'password',
        'remember_me' => 'rememberMe',
        'username' => 'username'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
        'password' => 'setPassword',
        'remember_me' => 'setRememberMe',
        'username' => 'setUsername'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
        'password' => 'getPassword',
        'remember_me' => 'getRememberMe',
        'username' => 'getUsername'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['remember_me'] = isset($data['remember_me']) ? $data['remember_me'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ((strlen($this->container['password']) > 100)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be smaller than or equal to 100.";
        }

        if ((strlen($this->container['password']) < 4)) {
            $invalidProperties[] = "invalid value for 'password', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ((strlen($this->container['username']) > 50)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['username']) < 1)) {
            $invalidProperties[] = "invalid value for 'username', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[_'.@A-Za-z0-9-]*$/", $this->container['username'])) {
            $invalidProperties[] = "invalid value for 'username', must be conform to the pattern /^[_'.@A-Za-z0-9-]*$/.";
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

        if ($this->container['password'] === null) {
            return false;
        }
        if (strlen($this->container['password']) > 100) {
            return false;
        }
        if (strlen($this->container['password']) < 4) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if (strlen($this->container['username']) > 50) {
            return false;
        }
        if (strlen($this->container['username']) < 1) {
            return false;
        }
        if (!preg_match("/^[_'.@A-Za-z0-9-]*$/", $this->container['username'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        if ((strlen($password) > 100)) {
            throw new \InvalidArgumentException('invalid length for $password when calling LoginVM., must be smaller than or equal to 100.');
        }
        if ((strlen($password) < 4)) {
            throw new \InvalidArgumentException('invalid length for $password when calling LoginVM., must be bigger than or equal to 4.');
        }

        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets remember_me
     *
     * @return bool
     */
    public function getRememberMe()
    {
        return $this->container['remember_me'];
    }

    /**
     * Sets remember_me
     *
     * @param bool $remember_me remember_me
     *
     * @return $this
     */
    public function setRememberMe($remember_me)
    {
        $this->container['remember_me'] = $remember_me;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        if ((strlen($username) > 50)) {
            throw new \InvalidArgumentException('invalid length for $username when calling LoginVM., must be smaller than or equal to 50.');
        }
        if ((strlen($username) < 1)) {
            throw new \InvalidArgumentException('invalid length for $username when calling LoginVM., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[_'.@A-Za-z0-9-]*$/", $username))) {
            throw new \InvalidArgumentException("invalid value for $username when calling LoginVM., must conform to the pattern /^[_'.@A-Za-z0-9-]*$/.");
        }

        $this->container['username'] = $username;

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


