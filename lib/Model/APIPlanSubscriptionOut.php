<?php
/**
 * APIPlanSubscriptionOut
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
 * OpenAPI spec version: 2.0.7
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
 * APIPlanSubscriptionOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class APIPlanSubscriptionOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'APIPlanSubscriptionOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'api_key' => 'string',
        'plan_started' => 'int',
        'prior_plan_started' => 'int',
        'plan_ended' => 'int',
        'tax_rate' => 'double',
        'plan_name' => 'string',
        'plan_base_fees_key' => 'string',
        'plan_status' => 'string',
        'plan_quota' => 'int',
        'price_usd' => 'double',
        'price_overage_usd' => 'double',
        'price' => 'double',
        'price_overage' => 'double',
        'currency' => 'string',
        'currency_factor' => 'double',
        'stripe_customer_id' => 'string',
        'stripe_status' => 'string',
        'stripe_subscription' => 'string',
        'user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'api_key' => null,
        'plan_started' => 'int64',
        'prior_plan_started' => 'int64',
        'plan_ended' => 'int64',
        'tax_rate' => 'double',
        'plan_name' => null,
        'plan_base_fees_key' => null,
        'plan_status' => null,
        'plan_quota' => 'int64',
        'price_usd' => 'double',
        'price_overage_usd' => 'double',
        'price' => 'double',
        'price_overage' => 'double',
        'currency' => null,
        'currency_factor' => 'double',
        'stripe_customer_id' => null,
        'stripe_status' => null,
        'stripe_subscription' => null,
        'user_id' => null
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
        'plan_started' => 'planStarted',
        'prior_plan_started' => 'priorPlanStarted',
        'plan_ended' => 'planEnded',
        'tax_rate' => 'taxRate',
        'plan_name' => 'planName',
        'plan_base_fees_key' => 'planBaseFeesKey',
        'plan_status' => 'planStatus',
        'plan_quota' => 'planQuota',
        'price_usd' => 'priceUSD',
        'price_overage_usd' => 'priceOverageUSD',
        'price' => 'price',
        'price_overage' => 'priceOverage',
        'currency' => 'currency',
        'currency_factor' => 'currencyFactor',
        'stripe_customer_id' => 'stripeCustomerId',
        'stripe_status' => 'stripeStatus',
        'stripe_subscription' => 'stripeSubscription',
        'user_id' => 'userId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_key' => 'setApiKey',
        'plan_started' => 'setPlanStarted',
        'prior_plan_started' => 'setPriorPlanStarted',
        'plan_ended' => 'setPlanEnded',
        'tax_rate' => 'setTaxRate',
        'plan_name' => 'setPlanName',
        'plan_base_fees_key' => 'setPlanBaseFeesKey',
        'plan_status' => 'setPlanStatus',
        'plan_quota' => 'setPlanQuota',
        'price_usd' => 'setPriceUsd',
        'price_overage_usd' => 'setPriceOverageUsd',
        'price' => 'setPrice',
        'price_overage' => 'setPriceOverage',
        'currency' => 'setCurrency',
        'currency_factor' => 'setCurrencyFactor',
        'stripe_customer_id' => 'setStripeCustomerId',
        'stripe_status' => 'setStripeStatus',
        'stripe_subscription' => 'setStripeSubscription',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_key' => 'getApiKey',
        'plan_started' => 'getPlanStarted',
        'prior_plan_started' => 'getPriorPlanStarted',
        'plan_ended' => 'getPlanEnded',
        'tax_rate' => 'getTaxRate',
        'plan_name' => 'getPlanName',
        'plan_base_fees_key' => 'getPlanBaseFeesKey',
        'plan_status' => 'getPlanStatus',
        'plan_quota' => 'getPlanQuota',
        'price_usd' => 'getPriceUsd',
        'price_overage_usd' => 'getPriceOverageUsd',
        'price' => 'getPrice',
        'price_overage' => 'getPriceOverage',
        'currency' => 'getCurrency',
        'currency_factor' => 'getCurrencyFactor',
        'stripe_customer_id' => 'getStripeCustomerId',
        'stripe_status' => 'getStripeStatus',
        'stripe_subscription' => 'getStripeSubscription',
        'user_id' => 'getUserId'
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
        $this->container['plan_started'] = isset($data['plan_started']) ? $data['plan_started'] : null;
        $this->container['prior_plan_started'] = isset($data['prior_plan_started']) ? $data['prior_plan_started'] : null;
        $this->container['plan_ended'] = isset($data['plan_ended']) ? $data['plan_ended'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['plan_name'] = isset($data['plan_name']) ? $data['plan_name'] : null;
        $this->container['plan_base_fees_key'] = isset($data['plan_base_fees_key']) ? $data['plan_base_fees_key'] : null;
        $this->container['plan_status'] = isset($data['plan_status']) ? $data['plan_status'] : null;
        $this->container['plan_quota'] = isset($data['plan_quota']) ? $data['plan_quota'] : null;
        $this->container['price_usd'] = isset($data['price_usd']) ? $data['price_usd'] : null;
        $this->container['price_overage_usd'] = isset($data['price_overage_usd']) ? $data['price_overage_usd'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_overage'] = isset($data['price_overage']) ? $data['price_overage'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['currency_factor'] = isset($data['currency_factor']) ? $data['currency_factor'] : null;
        $this->container['stripe_customer_id'] = isset($data['stripe_customer_id']) ? $data['stripe_customer_id'] : null;
        $this->container['stripe_status'] = isset($data['stripe_status']) ? $data['stripe_status'] : null;
        $this->container['stripe_subscription'] = isset($data['stripe_subscription']) ? $data['stripe_subscription'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
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
     * Gets plan_started
     *
     * @return int|null
     */
    public function getPlanStarted()
    {
        return $this->container['plan_started'];
    }

    /**
     * Sets plan_started
     *
     * @param int|null $plan_started plan_started
     *
     * @return $this
     */
    public function setPlanStarted($plan_started)
    {
        $this->container['plan_started'] = $plan_started;

        return $this;
    }

    /**
     * Gets prior_plan_started
     *
     * @return int|null
     */
    public function getPriorPlanStarted()
    {
        return $this->container['prior_plan_started'];
    }

    /**
     * Sets prior_plan_started
     *
     * @param int|null $prior_plan_started prior_plan_started
     *
     * @return $this
     */
    public function setPriorPlanStarted($prior_plan_started)
    {
        $this->container['prior_plan_started'] = $prior_plan_started;

        return $this;
    }

    /**
     * Gets plan_ended
     *
     * @return int|null
     */
    public function getPlanEnded()
    {
        return $this->container['plan_ended'];
    }

    /**
     * Sets plan_ended
     *
     * @param int|null $plan_ended plan_ended
     *
     * @return $this
     */
    public function setPlanEnded($plan_ended)
    {
        $this->container['plan_ended'] = $plan_ended;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return double|null
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param double|null $tax_rate tax_rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets plan_name
     *
     * @return string|null
     */
    public function getPlanName()
    {
        return $this->container['plan_name'];
    }

    /**
     * Sets plan_name
     *
     * @param string|null $plan_name plan_name
     *
     * @return $this
     */
    public function setPlanName($plan_name)
    {
        $this->container['plan_name'] = $plan_name;

        return $this;
    }

    /**
     * Gets plan_base_fees_key
     *
     * @return string|null
     */
    public function getPlanBaseFeesKey()
    {
        return $this->container['plan_base_fees_key'];
    }

    /**
     * Sets plan_base_fees_key
     *
     * @param string|null $plan_base_fees_key plan_base_fees_key
     *
     * @return $this
     */
    public function setPlanBaseFeesKey($plan_base_fees_key)
    {
        $this->container['plan_base_fees_key'] = $plan_base_fees_key;

        return $this;
    }

    /**
     * Gets plan_status
     *
     * @return string|null
     */
    public function getPlanStatus()
    {
        return $this->container['plan_status'];
    }

    /**
     * Sets plan_status
     *
     * @param string|null $plan_status plan_status
     *
     * @return $this
     */
    public function setPlanStatus($plan_status)
    {
        $this->container['plan_status'] = $plan_status;

        return $this;
    }

    /**
     * Gets plan_quota
     *
     * @return int|null
     */
    public function getPlanQuota()
    {
        return $this->container['plan_quota'];
    }

    /**
     * Sets plan_quota
     *
     * @param int|null $plan_quota plan_quota
     *
     * @return $this
     */
    public function setPlanQuota($plan_quota)
    {
        $this->container['plan_quota'] = $plan_quota;

        return $this;
    }

    /**
     * Gets price_usd
     *
     * @return double|null
     */
    public function getPriceUsd()
    {
        return $this->container['price_usd'];
    }

    /**
     * Sets price_usd
     *
     * @param double|null $price_usd price_usd
     *
     * @return $this
     */
    public function setPriceUsd($price_usd)
    {
        $this->container['price_usd'] = $price_usd;

        return $this;
    }

    /**
     * Gets price_overage_usd
     *
     * @return double|null
     */
    public function getPriceOverageUsd()
    {
        return $this->container['price_overage_usd'];
    }

    /**
     * Sets price_overage_usd
     *
     * @param double|null $price_overage_usd price_overage_usd
     *
     * @return $this
     */
    public function setPriceOverageUsd($price_overage_usd)
    {
        $this->container['price_overage_usd'] = $price_overage_usd;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|null $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_overage
     *
     * @return double|null
     */
    public function getPriceOverage()
    {
        return $this->container['price_overage'];
    }

    /**
     * Sets price_overage
     *
     * @param double|null $price_overage price_overage
     *
     * @return $this
     */
    public function setPriceOverage($price_overage)
    {
        $this->container['price_overage'] = $price_overage;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_factor
     *
     * @return double|null
     */
    public function getCurrencyFactor()
    {
        return $this->container['currency_factor'];
    }

    /**
     * Sets currency_factor
     *
     * @param double|null $currency_factor currency_factor
     *
     * @return $this
     */
    public function setCurrencyFactor($currency_factor)
    {
        $this->container['currency_factor'] = $currency_factor;

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
     * Gets stripe_status
     *
     * @return string|null
     */
    public function getStripeStatus()
    {
        return $this->container['stripe_status'];
    }

    /**
     * Sets stripe_status
     *
     * @param string|null $stripe_status stripe_status
     *
     * @return $this
     */
    public function setStripeStatus($stripe_status)
    {
        $this->container['stripe_status'] = $stripe_status;

        return $this;
    }

    /**
     * Gets stripe_subscription
     *
     * @return string|null
     */
    public function getStripeSubscription()
    {
        return $this->container['stripe_subscription'];
    }

    /**
     * Sets stripe_subscription
     *
     * @param string|null $stripe_subscription stripe_subscription
     *
     * @return $this
     */
    public function setStripeSubscription($stripe_subscription)
    {
        $this->container['stripe_subscription'] = $stripe_subscription;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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


