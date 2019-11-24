<?php
/**
 * FirstLastNameOriginedOut
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
 * FirstLastNameOriginedOut Class Doc Comment
 *
 * @category Class
 * @description Represents the output of inferring the LIKELY country of Origin from a personal name.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FirstLastNameOriginedOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FirstLastNameOriginedOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'country_origin' => 'string',
        'country_origin_alt' => 'string',
        'countries_origin_top' => 'string[]',
        'score' => 'double',
        'region_origin' => 'string',
        'top_region_origin' => 'string',
        'sub_region_origin' => 'string',
        'probability_calibrated' => 'double',
        'probability_alt_calibrated' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'first_name' => null,
        'last_name' => null,
        'country_origin' => null,
        'country_origin_alt' => null,
        'countries_origin_top' => null,
        'score' => 'double',
        'region_origin' => null,
        'top_region_origin' => null,
        'sub_region_origin' => null,
        'probability_calibrated' => 'double',
        'probability_alt_calibrated' => 'double'
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
        'id' => 'id',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'country_origin' => 'countryOrigin',
        'country_origin_alt' => 'countryOriginAlt',
        'countries_origin_top' => 'countriesOriginTop',
        'score' => 'score',
        'region_origin' => 'regionOrigin',
        'top_region_origin' => 'topRegionOrigin',
        'sub_region_origin' => 'subRegionOrigin',
        'probability_calibrated' => 'probabilityCalibrated',
        'probability_alt_calibrated' => 'probabilityAltCalibrated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'country_origin' => 'setCountryOrigin',
        'country_origin_alt' => 'setCountryOriginAlt',
        'countries_origin_top' => 'setCountriesOriginTop',
        'score' => 'setScore',
        'region_origin' => 'setRegionOrigin',
        'top_region_origin' => 'setTopRegionOrigin',
        'sub_region_origin' => 'setSubRegionOrigin',
        'probability_calibrated' => 'setProbabilityCalibrated',
        'probability_alt_calibrated' => 'setProbabilityAltCalibrated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'country_origin' => 'getCountryOrigin',
        'country_origin_alt' => 'getCountryOriginAlt',
        'countries_origin_top' => 'getCountriesOriginTop',
        'score' => 'getScore',
        'region_origin' => 'getRegionOrigin',
        'top_region_origin' => 'getTopRegionOrigin',
        'sub_region_origin' => 'getSubRegionOrigin',
        'probability_calibrated' => 'getProbabilityCalibrated',
        'probability_alt_calibrated' => 'getProbabilityAltCalibrated'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['country_origin'] = isset($data['country_origin']) ? $data['country_origin'] : null;
        $this->container['country_origin_alt'] = isset($data['country_origin_alt']) ? $data['country_origin_alt'] : null;
        $this->container['countries_origin_top'] = isset($data['countries_origin_top']) ? $data['countries_origin_top'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['region_origin'] = isset($data['region_origin']) ? $data['region_origin'] : null;
        $this->container['top_region_origin'] = isset($data['top_region_origin']) ? $data['top_region_origin'] : null;
        $this->container['sub_region_origin'] = isset($data['sub_region_origin']) ? $data['sub_region_origin'] : null;
        $this->container['probability_calibrated'] = isset($data['probability_calibrated']) ? $data['probability_calibrated'] : null;
        $this->container['probability_alt_calibrated'] = isset($data['probability_alt_calibrated']) ? $data['probability_alt_calibrated'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets country_origin
     *
     * @return string|null
     */
    public function getCountryOrigin()
    {
        return $this->container['country_origin'];
    }

    /**
     * Sets country_origin
     *
     * @param string|null $country_origin Most likely country of Origin
     *
     * @return $this
     */
    public function setCountryOrigin($country_origin)
    {
        $this->container['country_origin'] = $country_origin;

        return $this;
    }

    /**
     * Gets country_origin_alt
     *
     * @return string|null
     */
    public function getCountryOriginAlt()
    {
        return $this->container['country_origin_alt'];
    }

    /**
     * Sets country_origin_alt
     *
     * @param string|null $country_origin_alt Second best alternative : country of Origin
     *
     * @return $this
     */
    public function setCountryOriginAlt($country_origin_alt)
    {
        $this->container['country_origin_alt'] = $country_origin_alt;

        return $this;
    }

    /**
     * Gets countries_origin_top
     *
     * @return string[]|null
     */
    public function getCountriesOriginTop()
    {
        return $this->container['countries_origin_top'];
    }

    /**
     * Sets countries_origin_top
     *
     * @param string[]|null $countries_origin_top List countries of Origin (top 10)
     *
     * @return $this
     */
    public function setCountriesOriginTop($countries_origin_top)
    {
        $this->container['countries_origin_top'] = $countries_origin_top;

        return $this;
    }

    /**
     * Gets score
     *
     * @return double|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param double|null $score Compatibility to NamSor_v1 Origin score value
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets region_origin
     *
     * @return string|null
     */
    public function getRegionOrigin()
    {
        return $this->container['region_origin'];
    }

    /**
     * Sets region_origin
     *
     * @param string|null $region_origin Most likely region of Origin (based on countryOrigin ISO2 code)
     *
     * @return $this
     */
    public function setRegionOrigin($region_origin)
    {
        $this->container['region_origin'] = $region_origin;

        return $this;
    }

    /**
     * Gets top_region_origin
     *
     * @return string|null
     */
    public function getTopRegionOrigin()
    {
        return $this->container['top_region_origin'];
    }

    /**
     * Sets top_region_origin
     *
     * @param string|null $top_region_origin Most likely region of Origin (based on countryOrigin ISO2 code)
     *
     * @return $this
     */
    public function setTopRegionOrigin($top_region_origin)
    {
        $this->container['top_region_origin'] = $top_region_origin;

        return $this;
    }

    /**
     * Gets sub_region_origin
     *
     * @return string|null
     */
    public function getSubRegionOrigin()
    {
        return $this->container['sub_region_origin'];
    }

    /**
     * Sets sub_region_origin
     *
     * @param string|null $sub_region_origin Most likely region of Origin (based on countryOrigin ISO2 code)
     *
     * @return $this
     */
    public function setSubRegionOrigin($sub_region_origin)
    {
        $this->container['sub_region_origin'] = $sub_region_origin;

        return $this;
    }

    /**
     * Gets probability_calibrated
     *
     * @return double|null
     */
    public function getProbabilityCalibrated()
    {
        return $this->container['probability_calibrated'];
    }

    /**
     * Sets probability_calibrated
     *
     * @param double|null $probability_calibrated probability_calibrated
     *
     * @return $this
     */
    public function setProbabilityCalibrated($probability_calibrated)
    {
        $this->container['probability_calibrated'] = $probability_calibrated;

        return $this;
    }

    /**
     * Gets probability_alt_calibrated
     *
     * @return double|null
     */
    public function getProbabilityAltCalibrated()
    {
        return $this->container['probability_alt_calibrated'];
    }

    /**
     * Sets probability_alt_calibrated
     *
     * @param double|null $probability_alt_calibrated probability_alt_calibrated
     *
     * @return $this
     */
    public function setProbabilityAltCalibrated($probability_alt_calibrated)
    {
        $this->container['probability_alt_calibrated'] = $probability_alt_calibrated;

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


