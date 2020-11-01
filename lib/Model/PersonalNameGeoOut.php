<?php
/**
 * PersonalNameGeoOut
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
 * PersonalNameGeoOut Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PersonalNameGeoOut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PersonalNameGeoOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'score' => 'double',
        'country' => 'string',
        'country_alt' => 'string',
        'region' => 'string',
        'top_region' => 'string',
        'sub_region' => 'string',
        'countries_top' => 'string[]',
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
        'name' => null,
        'score' => 'double',
        'country' => null,
        'country_alt' => null,
        'region' => null,
        'top_region' => null,
        'sub_region' => null,
        'countries_top' => null,
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
        'name' => 'name',
        'score' => 'score',
        'country' => 'country',
        'country_alt' => 'countryAlt',
        'region' => 'region',
        'top_region' => 'topRegion',
        'sub_region' => 'subRegion',
        'countries_top' => 'countriesTop',
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
        'name' => 'setName',
        'score' => 'setScore',
        'country' => 'setCountry',
        'country_alt' => 'setCountryAlt',
        'region' => 'setRegion',
        'top_region' => 'setTopRegion',
        'sub_region' => 'setSubRegion',
        'countries_top' => 'setCountriesTop',
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
        'name' => 'getName',
        'score' => 'getScore',
        'country' => 'getCountry',
        'country_alt' => 'getCountryAlt',
        'region' => 'getRegion',
        'top_region' => 'getTopRegion',
        'sub_region' => 'getSubRegion',
        'countries_top' => 'getCountriesTop',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_alt'] = isset($data['country_alt']) ? $data['country_alt'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['top_region'] = isset($data['top_region']) ? $data['top_region'] : null;
        $this->container['sub_region'] = isset($data['sub_region']) ? $data['sub_region'] : null;
        $this->container['countries_top'] = isset($data['countries_top']) ? $data['countries_top'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param double|null $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_alt
     *
     * @return string|null
     */
    public function getCountryAlt()
    {
        return $this->container['country_alt'];
    }

    /**
     * Sets country_alt
     *
     * @param string|null $country_alt country_alt
     *
     * @return $this
     */
    public function setCountryAlt($country_alt)
    {
        $this->container['country_alt'] = $country_alt;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets top_region
     *
     * @return string|null
     */
    public function getTopRegion()
    {
        return $this->container['top_region'];
    }

    /**
     * Sets top_region
     *
     * @param string|null $top_region top_region
     *
     * @return $this
     */
    public function setTopRegion($top_region)
    {
        $this->container['top_region'] = $top_region;

        return $this;
    }

    /**
     * Gets sub_region
     *
     * @return string|null
     */
    public function getSubRegion()
    {
        return $this->container['sub_region'];
    }

    /**
     * Sets sub_region
     *
     * @param string|null $sub_region sub_region
     *
     * @return $this
     */
    public function setSubRegion($sub_region)
    {
        $this->container['sub_region'] = $sub_region;

        return $this;
    }

    /**
     * Gets countries_top
     *
     * @return string[]|null
     */
    public function getCountriesTop()
    {
        return $this->container['countries_top'];
    }

    /**
     * Sets countries_top
     *
     * @param string[]|null $countries_top List countries (top 10)
     *
     * @return $this
     */
    public function setCountriesTop($countries_top)
    {
        $this->container['countries_top'] = $countries_top;

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


