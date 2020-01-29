<?php
/**
 * BillingInfoInOut
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NamSor API v2
 *
 * NamSor API v2 : enpoints to process personal names (gender, cultural origin or ethnicity) in all alphabets or languages. Use GET methods for small tests, but prefer POST methods for higher throughput (batch processing of up to 100 names at a time). Need something you can't find here? We have many more features coming soon. Let us know, we'll do our best to add it!
 *
 * OpenAPI spec version: 2.0.8
 * Contact: contact@namsor.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BillingInfoInOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BillingInfoInOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BillingInfoInOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_email' => 'string',
        'preferred_currency' => 'string',
        'customer_name' => 'string',
        'customer_phone' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_city' => 'string',
        'address_postal_code' => 'string',
        'address_state' => 'string',
        'address_country' => 'string',
        'vat_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'billing_email' => null,
        'preferred_currency' => null,
        'customer_name' => null,
        'customer_phone' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_city' => null,
        'address_postal_code' => null,
        'address_state' => null,
        'address_country' => null,
        'vat_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_email' => 'billingEmail',
        'preferred_currency' => 'preferredCurrency',
        'customer_name' => 'customerName',
        'customer_phone' => 'customerPhone',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_city' => 'addressCity',
        'address_postal_code' => 'addressPostalCode',
        'address_state' => 'addressState',
        'address_country' => 'addressCountry',
        'vat_id' => 'vatID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_email' => 'setBillingEmail',
        'preferred_currency' => 'setPreferredCurrency',
        'customer_name' => 'setCustomerName',
        'customer_phone' => 'setCustomerPhone',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_city' => 'setAddressCity',
        'address_postal_code' => 'setAddressPostalCode',
        'address_state' => 'setAddressState',
        'address_country' => 'setAddressCountry',
        'vat_id' => 'setVatId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_email' => 'getBillingEmail',
        'preferred_currency' => 'getPreferredCurrency',
        'customer_name' => 'getCustomerName',
        'customer_phone' => 'getCustomerPhone',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_city' => 'getAddressCity',
        'address_postal_code' => 'getAddressPostalCode',
        'address_state' => 'getAddressState',
        'address_country' => 'getAddressCountry',
        'vat_id' => 'getVatId'
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
        return self::$openAPIModelName;
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
        $this->container['billing_email'] = isset($data['billing_email']) ? $data['billing_email'] : null;
        $this->container['preferred_currency'] = isset($data['preferred_currency']) ? $data['preferred_currency'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_phone'] = isset($data['customer_phone']) ? $data['customer_phone'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_city'] = isset($data['address_city']) ? $data['address_city'] : null;
        $this->container['address_postal_code'] = isset($data['address_postal_code']) ? $data['address_postal_code'] : null;
        $this->container['address_state'] = isset($data['address_state']) ? $data['address_state'] : null;
        $this->container['address_country'] = isset($data['address_country']) ? $data['address_country'] : null;
        $this->container['vat_id'] = isset($data['vat_id']) ? $data['vat_id'] : null;
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets billing_email
     *
     * @return string|null
     */
    public function getBillingEmail()
    {
        return $this->container['billing_email'];
    }

    /**
     * Sets billing_email
     *
     * @param string|null $billing_email billing_email
     *
     * @return $this
     */
    public function setBillingEmail($billing_email)
    {
        $this->container['billing_email'] = $billing_email;

        return $this;
    }

    /**
     * Gets preferred_currency
     *
     * @return string|null
     */
    public function getPreferredCurrency()
    {
        return $this->container['preferred_currency'];
    }

    /**
     * Sets preferred_currency
     *
     * @param string|null $preferred_currency preferred_currency
     *
     * @return $this
     */
    public function setPreferredCurrency($preferred_currency)
    {
        $this->container['preferred_currency'] = $preferred_currency;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string|null $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_phone
     *
     * @return string|null
     */
    public function getCustomerPhone()
    {
        return $this->container['customer_phone'];
    }

    /**
     * Sets customer_phone
     *
     * @param string|null $customer_phone customer_phone
     *
     * @return $this
     */
    public function setCustomerPhone($customer_phone)
    {
        $this->container['customer_phone'] = $customer_phone;

        return $this;
    }

    /**
     * Gets address_line1
     *
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string|null $address_line1 address_line1
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 address_line2
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string|null
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string|null $address_city address_city
     *
     * @return $this
     */
    public function setAddressCity($address_city)
    {
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_postal_code
     *
     * @return string|null
     */
    public function getAddressPostalCode()
    {
        return $this->container['address_postal_code'];
    }

    /**
     * Sets address_postal_code
     *
     * @param string|null $address_postal_code address_postal_code
     *
     * @return $this
     */
    public function setAddressPostalCode($address_postal_code)
    {
        $this->container['address_postal_code'] = $address_postal_code;

        return $this;
    }

    /**
     * Gets address_state
     *
     * @return string|null
     */
    public function getAddressState()
    {
        return $this->container['address_state'];
    }

    /**
     * Sets address_state
     *
     * @param string|null $address_state address_state
     *
     * @return $this
     */
    public function setAddressState($address_state)
    {
        $this->container['address_state'] = $address_state;

        return $this;
    }

    /**
     * Gets address_country
     *
     * @return string|null
     */
    public function getAddressCountry()
    {
        return $this->container['address_country'];
    }

    /**
     * Sets address_country
     *
     * @param string|null $address_country address_country
     *
     * @return $this
     */
    public function setAddressCountry($address_country)
    {
        $this->container['address_country'] = $address_country;

        return $this;
    }

    /**
     * Gets vat_id
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->container['vat_id'];
    }

    /**
     * Sets vat_id
     *
     * @param string|null $vat_id vat_id
     *
     * @return $this
     */
    public function setVatId($vat_id)
    {
        $this->container['vat_id'] = $vat_id;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


