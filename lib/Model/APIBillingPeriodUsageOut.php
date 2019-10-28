<?php
/**
 * APIBillingPeriodUsageOut
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
 * OpenAPI spec version: 2.0.6
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
 * APIBillingPeriodUsageOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class APIBillingPeriodUsageOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'APIBillingPeriodUsageOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'subscription_started' => 'int',
        'period_started' => 'int',
        'period_ended' => 'int',
        'stripe_current_period_end' => 'int',
        'stripe_current_period_start' => 'int',
        'billing_status' => 'string',
        'usage' => 'int',
        'soft_limit' => 'int',
        'hard_limit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'api_key' => null,
        'subscription_started' => 'int64',
        'period_started' => 'int64',
        'period_ended' => 'int64',
        'stripe_current_period_end' => 'int64',
        'stripe_current_period_start' => 'int64',
        'billing_status' => null,
        'usage' => 'int64',
        'soft_limit' => 'int64',
        'hard_limit' => 'int64'
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
        'api_key' => 'apiKey',
        'subscription_started' => 'subscriptionStarted',
        'period_started' => 'periodStarted',
        'period_ended' => 'periodEnded',
        'stripe_current_period_end' => 'stripeCurrentPeriodEnd',
        'stripe_current_period_start' => 'stripeCurrentPeriodStart',
        'billing_status' => 'billingStatus',
        'usage' => 'usage',
        'soft_limit' => 'softLimit',
        'hard_limit' => 'hardLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key' => 'setApiKey',
        'subscription_started' => 'setSubscriptionStarted',
        'period_started' => 'setPeriodStarted',
        'period_ended' => 'setPeriodEnded',
        'stripe_current_period_end' => 'setStripeCurrentPeriodEnd',
        'stripe_current_period_start' => 'setStripeCurrentPeriodStart',
        'billing_status' => 'setBillingStatus',
        'usage' => 'setUsage',
        'soft_limit' => 'setSoftLimit',
        'hard_limit' => 'setHardLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key' => 'getApiKey',
        'subscription_started' => 'getSubscriptionStarted',
        'period_started' => 'getPeriodStarted',
        'period_ended' => 'getPeriodEnded',
        'stripe_current_period_end' => 'getStripeCurrentPeriodEnd',
        'stripe_current_period_start' => 'getStripeCurrentPeriodStart',
        'billing_status' => 'getBillingStatus',
        'usage' => 'getUsage',
        'soft_limit' => 'getSoftLimit',
        'hard_limit' => 'getHardLimit'
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
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['subscription_started'] = isset($data['subscription_started']) ? $data['subscription_started'] : null;
        $this->container['period_started'] = isset($data['period_started']) ? $data['period_started'] : null;
        $this->container['period_ended'] = isset($data['period_ended']) ? $data['period_ended'] : null;
        $this->container['stripe_current_period_end'] = isset($data['stripe_current_period_end']) ? $data['stripe_current_period_end'] : null;
        $this->container['stripe_current_period_start'] = isset($data['stripe_current_period_start']) ? $data['stripe_current_period_start'] : null;
        $this->container['billing_status'] = isset($data['billing_status']) ? $data['billing_status'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['soft_limit'] = isset($data['soft_limit']) ? $data['soft_limit'] : null;
        $this->container['hard_limit'] = isset($data['hard_limit']) ? $data['hard_limit'] : null;
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
     * Gets subscription_started
     *
     * @return int|null
     */
    public function getSubscriptionStarted()
    {
        return $this->container['subscription_started'];
    }

    /**
     * Sets subscription_started
     *
     * @param int|null $subscription_started subscription_started
     *
     * @return $this
     */
    public function setSubscriptionStarted($subscription_started)
    {
        $this->container['subscription_started'] = $subscription_started;

        return $this;
    }

    /**
     * Gets period_started
     *
     * @return int|null
     */
    public function getPeriodStarted()
    {
        return $this->container['period_started'];
    }

    /**
     * Sets period_started
     *
     * @param int|null $period_started period_started
     *
     * @return $this
     */
    public function setPeriodStarted($period_started)
    {
        $this->container['period_started'] = $period_started;

        return $this;
    }

    /**
     * Gets period_ended
     *
     * @return int|null
     */
    public function getPeriodEnded()
    {
        return $this->container['period_ended'];
    }

    /**
     * Sets period_ended
     *
     * @param int|null $period_ended period_ended
     *
     * @return $this
     */
    public function setPeriodEnded($period_ended)
    {
        $this->container['period_ended'] = $period_ended;

        return $this;
    }

    /**
     * Gets stripe_current_period_end
     *
     * @return int|null
     */
    public function getStripeCurrentPeriodEnd()
    {
        return $this->container['stripe_current_period_end'];
    }

    /**
     * Sets stripe_current_period_end
     *
     * @param int|null $stripe_current_period_end stripe_current_period_end
     *
     * @return $this
     */
    public function setStripeCurrentPeriodEnd($stripe_current_period_end)
    {
        $this->container['stripe_current_period_end'] = $stripe_current_period_end;

        return $this;
    }

    /**
     * Gets stripe_current_period_start
     *
     * @return int|null
     */
    public function getStripeCurrentPeriodStart()
    {
        return $this->container['stripe_current_period_start'];
    }

    /**
     * Sets stripe_current_period_start
     *
     * @param int|null $stripe_current_period_start stripe_current_period_start
     *
     * @return $this
     */
    public function setStripeCurrentPeriodStart($stripe_current_period_start)
    {
        $this->container['stripe_current_period_start'] = $stripe_current_period_start;

        return $this;
    }

    /**
     * Gets billing_status
     *
     * @return string|null
     */
    public function getBillingStatus()
    {
        return $this->container['billing_status'];
    }

    /**
     * Sets billing_status
     *
     * @param string|null $billing_status billing_status
     *
     * @return $this
     */
    public function setBillingStatus($billing_status)
    {
        $this->container['billing_status'] = $billing_status;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return int|null
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param int|null $usage usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets soft_limit
     *
     * @return int|null
     */
    public function getSoftLimit()
    {
        return $this->container['soft_limit'];
    }

    /**
     * Sets soft_limit
     *
     * @param int|null $soft_limit soft_limit
     *
     * @return $this
     */
    public function setSoftLimit($soft_limit)
    {
        $this->container['soft_limit'] = $soft_limit;

        return $this;
    }

    /**
     * Gets hard_limit
     *
     * @return int|null
     */
    public function getHardLimit()
    {
        return $this->container['hard_limit'];
    }

    /**
     * Sets hard_limit
     *
     * @param int|null $hard_limit hard_limit
     *
     * @return $this
     */
    public function setHardLimit($hard_limit)
    {
        $this->container['hard_limit'] = $hard_limit;

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


