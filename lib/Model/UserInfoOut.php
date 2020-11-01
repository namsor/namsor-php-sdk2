<?php
/**
 * UserInfoOut
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
 * OpenAPI spec version: 2.0.11
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
 * UserInfoOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserInfoOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserInfoOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'email_verified' => 'bool',
        'display_name' => 'string',
        'photo_url' => 'string',
        'disabled' => 'bool',
        'first_known_ip_address' => 'string',
        'provider_id' => 'string',
        'time_stamp' => 'int',
        'verify_token' => 'string',
        'api_key' => 'string',
        'stripe_perishable_key' => 'string',
        'stripe_customer_id' => 'string',
        'other_infos' => '\OpenAPI\Client\Model\UserInfoOut[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uid' => null,
        'email' => null,
        'phone_number' => null,
        'email_verified' => null,
        'display_name' => null,
        'photo_url' => null,
        'disabled' => null,
        'first_known_ip_address' => null,
        'provider_id' => null,
        'time_stamp' => 'int64',
        'verify_token' => null,
        'api_key' => null,
        'stripe_perishable_key' => null,
        'stripe_customer_id' => null,
        'other_infos' => null
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
        'uid' => 'uid',
        'email' => 'email',
        'phone_number' => 'phoneNumber',
        'email_verified' => 'emailVerified',
        'display_name' => 'displayName',
        'photo_url' => 'photoUrl',
        'disabled' => 'disabled',
        'first_known_ip_address' => 'firstKnownIpAddress',
        'provider_id' => 'providerId',
        'time_stamp' => 'timeStamp',
        'verify_token' => 'verifyToken',
        'api_key' => 'apiKey',
        'stripe_perishable_key' => 'stripePerishableKey',
        'stripe_customer_id' => 'stripeCustomerId',
        'other_infos' => 'otherInfos'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'email' => 'setEmail',
        'phone_number' => 'setPhoneNumber',
        'email_verified' => 'setEmailVerified',
        'display_name' => 'setDisplayName',
        'photo_url' => 'setPhotoUrl',
        'disabled' => 'setDisabled',
        'first_known_ip_address' => 'setFirstKnownIpAddress',
        'provider_id' => 'setProviderId',
        'time_stamp' => 'setTimeStamp',
        'verify_token' => 'setVerifyToken',
        'api_key' => 'setApiKey',
        'stripe_perishable_key' => 'setStripePerishableKey',
        'stripe_customer_id' => 'setStripeCustomerId',
        'other_infos' => 'setOtherInfos'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'email' => 'getEmail',
        'phone_number' => 'getPhoneNumber',
        'email_verified' => 'getEmailVerified',
        'display_name' => 'getDisplayName',
        'photo_url' => 'getPhotoUrl',
        'disabled' => 'getDisabled',
        'first_known_ip_address' => 'getFirstKnownIpAddress',
        'provider_id' => 'getProviderId',
        'time_stamp' => 'getTimeStamp',
        'verify_token' => 'getVerifyToken',
        'api_key' => 'getApiKey',
        'stripe_perishable_key' => 'getStripePerishableKey',
        'stripe_customer_id' => 'getStripeCustomerId',
        'other_infos' => 'getOtherInfos'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['email_verified'] = isset($data['email_verified']) ? $data['email_verified'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['photo_url'] = isset($data['photo_url']) ? $data['photo_url'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['first_known_ip_address'] = isset($data['first_known_ip_address']) ? $data['first_known_ip_address'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['time_stamp'] = isset($data['time_stamp']) ? $data['time_stamp'] : null;
        $this->container['verify_token'] = isset($data['verify_token']) ? $data['verify_token'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['stripe_perishable_key'] = isset($data['stripe_perishable_key']) ? $data['stripe_perishable_key'] : null;
        $this->container['stripe_customer_id'] = isset($data['stripe_customer_id']) ? $data['stripe_customer_id'] : null;
        $this->container['other_infos'] = isset($data['other_infos']) ? $data['other_infos'] : null;
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
     * Gets uid
     *
     * @return string|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string|null $uid uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets email_verified
     *
     * @return bool|null
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     *
     * @param bool|null $email_verified email_verified
     *
     * @return $this
     */
    public function setEmailVerified($email_verified)
    {
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets photo_url
     *
     * @return string|null
     */
    public function getPhotoUrl()
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string|null $photo_url photo_url
     *
     * @return $this
     */
    public function setPhotoUrl($photo_url)
    {
        $this->container['photo_url'] = $photo_url;

        return $this;
    }

    /**
     * Gets disabled
     *
     * @return bool|null
     */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
     * Sets disabled
     *
     * @param bool|null $disabled disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;

        return $this;
    }

    /**
     * Gets first_known_ip_address
     *
     * @return string|null
     */
    public function getFirstKnownIpAddress()
    {
        return $this->container['first_known_ip_address'];
    }

    /**
     * Sets first_known_ip_address
     *
     * @param string|null $first_known_ip_address first_known_ip_address
     *
     * @return $this
     */
    public function setFirstKnownIpAddress($first_known_ip_address)
    {
        $this->container['first_known_ip_address'] = $first_known_ip_address;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string|null
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string|null $provider_id provider_id
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets time_stamp
     *
     * @return int|null
     */
    public function getTimeStamp()
    {
        return $this->container['time_stamp'];
    }

    /**
     * Sets time_stamp
     *
     * @param int|null $time_stamp time_stamp
     *
     * @return $this
     */
    public function setTimeStamp($time_stamp)
    {
        $this->container['time_stamp'] = $time_stamp;

        return $this;
    }

    /**
     * Gets verify_token
     *
     * @return string|null
     */
    public function getVerifyToken()
    {
        return $this->container['verify_token'];
    }

    /**
     * Sets verify_token
     *
     * @param string|null $verify_token verify_token
     *
     * @return $this
     */
    public function setVerifyToken($verify_token)
    {
        $this->container['verify_token'] = $verify_token;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string|null
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string|null $api_key api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets stripe_perishable_key
     *
     * @return string|null
     */
    public function getStripePerishableKey()
    {
        return $this->container['stripe_perishable_key'];
    }

    /**
     * Sets stripe_perishable_key
     *
     * @param string|null $stripe_perishable_key stripe_perishable_key
     *
     * @return $this
     */
    public function setStripePerishableKey($stripe_perishable_key)
    {
        $this->container['stripe_perishable_key'] = $stripe_perishable_key;

        return $this;
    }

    /**
     * Gets stripe_customer_id
     *
     * @return string|null
     */
    public function getStripeCustomerId()
    {
        return $this->container['stripe_customer_id'];
    }

    /**
     * Sets stripe_customer_id
     *
     * @param string|null $stripe_customer_id stripe_customer_id
     *
     * @return $this
     */
    public function setStripeCustomerId($stripe_customer_id)
    {
        $this->container['stripe_customer_id'] = $stripe_customer_id;

        return $this;
    }

    /**
     * Gets other_infos
     *
     * @return \OpenAPI\Client\Model\UserInfoOut[]|null
     */
    public function getOtherInfos()
    {
        return $this->container['other_infos'];
    }

    /**
     * Sets other_infos
     *
     * @param \OpenAPI\Client\Model\UserInfoOut[]|null $other_infos other_infos
     *
     * @return $this
     */
    public function setOtherInfos($other_infos)
    {
        $this->container['other_infos'] = $other_infos;

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


